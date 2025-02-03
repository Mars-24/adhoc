<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_blog;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Post::all();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category_blog::all();
        $tags = Tags::all();
        return view('backend.blog.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'title.required' => 'Veuillez saisir le titre de votre sujet',
            'message.required' => 'Veuillez saisir votre message',
            'image.required' => 'Veuillez inserer une image',
            'category_id.required' => 'Veuillez selectionner une categorie pour votre sujet',
            'category_id.exist' => 'Veuillez selectionnez une categorie existante',
        ];

        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
            'image' => 'required',
            'category_id' => 'required|exists:category_blogs,id',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',

        ], $messages);

        $data = $request->all();
        if ($request->has('image')) {
            $destination_path = 'public';
            $file = $request->file('image');
            $file_name_hash = $file->hashName();

            $image = ImageManager::imagick()->read($file);

            // resize to 300 x 200 pixel
            $photo = $image->resize(600, 450);
            $photo->save(storage_path('app/' . $destination_path . '/' . $file_name_hash));
            $data['image'] = $file_name_hash;

            //dd($file_image);
        };

        // return dd($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($data['tags']);
        if ($post) {
            return redirect()->route('blog.index')->with('success', 'Sujet de blog crée avec success');
        } else {
            return back()->with('error', 'Erreur lors de la creation du sujet de blog');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Post::find($id);
        $categories = Category_blog::all();
        $tags = Tags::all();
        return view('backend.blog.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $messages = [
            'title.required' => 'Veuillez saisir le titre de votre sujet',
            'message.required' => 'Veuillez saisir votre message',
            'image.required' => 'Veuillez inserer une image',
            'category_id.required' => 'Veuillez selectionner une categorie pour votre sujet',
            'category_id.exist' => 'Veuillez selectionnez une categorie existante',
        ];

        
        $post = Post::find($id);
        if ($post) {
            $this->validate($request, [
                'title' => 'required',
                'message' => 'required',
                'image' => 'required',
                'category_id' => 'required|exists:category_blogs,id',
                'tags' => 'required|array',
                'tags.*' => 'exists:tags,id',
    
            ], $messages);
            $data = $request->all();
            if ($request->has('image')) {
                $destination_path = 'public';
                $file = $request->file('image');
                $file_name_hash = $file->hashName();
    
                $image = ImageManager::imagick()->read($file);
    
                // resize to 300 x 200 pixel
                $photo = $image->resize(600, 450);
                $photo->save(storage_path('app/' . $destination_path . '/' . $file_name_hash));
                $data['image'] = $file_name_hash;
    
                //dd($file_image);
            };
            $status = $post->fill($data)->save();
            if ($status) {
                return redirect()
                    ->route('blog.index')
                    ->with('success', 'Mise à jour du blog réussie');
            } else {
                return back()->with('error', 'Une erreur a été produite');
            }
        } else {
            return back()->with('error', 'Blog non trouvé');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Post::find($id);
        if ($blog) {
            $status = $blog->delete();
            if ($status) {
                return redirect()
                    ->route('blog.index')
                    ->with('success', 'Blog supprimé avec succès');
            } else {
                return back()->with('error', 'Erreur lors de la suppression du blog');
            }
        } else {
            return back()->with('error', 'Blog non trouvé');
        }
    }
}
