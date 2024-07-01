<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.portfolio.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return dd($request->all());
        $messages =[
            "title.required"=>"Veuillez entrer un titre",
            "description.required"=>"Veuillez entrer une description",
            "photo.required"=>"Veuillez entrer un fichier",
            "cat_id.required"=>"Veuillez entrer une categorie",
            ];
            $this->validate($request,[
                "title"=>"required|string",
                "description"=>"required|string",
                "photo"=>"required",
                "cat_id"=>"required",
                ],$messages);

                $data = $request->all();
                $data['slug']=Category::find($data['cat_id'])->slug;
                if ($request->has('photo')) {
                    $destination_path = 'public/uploads/files';
                    $file = $request->file('photo');
                    $file_name_hash = $file->hashName();
                    $image = ImageManager::imagick()->read($file);

                    // resize to 300 x 200 pixel
                    $photo = $image->resize(600, 450);
                    $photo->save(storage_path('app/' . $destination_path . '/' . $file_name_hash));

                    // $path = $request->file('photo')->storeAs($destination_path, $file_name_hash);
                    $data['photo'] =$file_name_hash;
        
                    //dd($file_image);
                };
            
        
                $status = Portfolio::create($data);
        
                if ($status) {
                    return redirect()->route('portfolio.index')->with('success', 'fichier creer');
                } else {
                    return back()->with('error', 'Erreur lors de l\'enregistrement');
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
        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $status = $portfolio->delete();
            if($status){
                return redirect()
                ->route('portfolio.index')
                ->with('success', 'portfolio supprimé avec succès');
            }else {
                return back()->with('error', 'Something went wrong');

            }

        }else{
            return back()->with('error', 'portfolio non trouvé');

        }
    }
}
