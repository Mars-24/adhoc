<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_blog;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Post::all();
        return view('backend.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category_blog::all();
        $tags = Tags::all();
        return view('backend.blog.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=[
            'title.required' => 'Veuillez saisir le titre de votre sujet',
            'message.required' => 'Veuillez saisir votre message',
            'image.required'=>'Veuillez inserer une image',
            'category_id.required' => 'Veuillez selectionner une categorie pour votre sujet',
            'category_id.exist' => 'Veuillez selectionnez une categorie existante',
        ];

        $this->validate($request,[
            'title'=>'required',
            'message'=>'required',
            'image'=>'required',
            'category_id'=>'required|exists:category_blogs,id',
        ],$messages);

        $data = $request->all();
        if ($request->has('image')) {
            $destination_path = 'public/uploads/blog_images';
            $file = $request->file('image');
            $file_name_hash = $file->hashName();
            $file_name = $file->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $file_name_hash);
            $data['image'] =$file_name_hash;

            //dd($file_image);
        };
    
        $post = new Post();
        $post=Post::create($data);
        $status = $post->tags()->attach();
        if ($status) {
            return redirect()->route('blog.index')->with('success','Sujet de blog crée avec success');
        } else {
            return back()->with('error','Erreur lors de la creation du sujet de blog');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
