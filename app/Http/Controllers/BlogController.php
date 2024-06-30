<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Tags;
use App\Models\Admin;
use App\Models\Category_blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index(){
        
    }

    public function blog_list(){
        $recents = Post::orderBy('id','Desc')->take(4)->get();
        $categories = Category_blog::all();
        $blogs=Post::orderBy('id','Desc')->paginate(8);
        return view('frontend.pages.blog-list',compact('blogs','categories','recents'));
    }
    public function blog_detail($id){
        $blog = Post::where('id',$id)->first();
        $recents = Post::orderBy('id','Desc')->take(4)->get();
        $tags= Tags::all();
        $comments = Comment::where('post_id',$id)->orderBy('created_at','desc')->take(3)->get();

        // return dd($blog);
        $categories = Category_blog::all();
        // $blogs=Post::orderBy('id','Desc')->paginate(8);
        return view('frontend.pages.blog-detail',compact('blog','recents','categories','tags','comments'));
    }

    public function blog_comment(Request $request,$id){
        // $messages=[
        //     'title.required' => 'Veuillez saisir le titre de votre sujet',
        //     'message.required' => 'Veuillez saisir votre message',
        //     'image.required'=>'Veuillez inserer une image',
        //     'category_id.required' => 'Veuillez selectionner une categorie pour votre sujet',
        //     'category_id.exist' => 'Veuillez selectionnez une categorie existante',
        // ];

        // $this->validate($request,[
        //     'title'=>'required',
        //     'message'=>'required',
        //     'image'=>'required',
        //     'category_id'=>'required|exists:category_blogs,id',
        // ],$messages);
        $comment = new Comment();
        $comment->post_id = $id;
        $comment->message = $request->input('message');
        $comment->email = $request->input('email'); // Assurez-vous que l'utilisateur est authentifié
        $comment->name = $request->input('name'); // Assurez-vous que l'utilisateur est authentifié
       
        $status= $comment->save();

        if ($status) {
            return redirect()->route('blog-list')->with('success','Sujet de blog crée avec success');
        } else {
            return back()->with('error','Erreur lors de la creation du sujet de blog');
        }
        return dd($comment);
    }
}
