<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // $admin = Admin::find(1);
        //visits($admin)->increment();

        $portfolios = Portfolio::orderBy('id','Desc')->take(6)->get();
        return view('frontend.pages.index',compact('portfolios'));
    }

    public function about(){
        return view('frontend.pages.about');
    }
    public function service(){
        return view('frontend.pages.service');
    }
    public function portfolio(){
        return view('frontend.pages.portfolio');
    }
    public function blog_list(){
        return view('frontend.pages.blog-list');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function message(Request $request){
        $message = [
            'email.required' => 'Veuillez assigner un email',
            'email.email' => 'Veuillez assigner un email valide (ex:@gmail)',
            'phone.string' => 'le telephone doit etre une chaine de caractère',
            'phone.required' => 'Veuillez renseigner un numero de telephone',
            'name.required' => 'Veuillez saisir le  nom du partenaire',
            'prenoms.required' => 'Veuillez saisir le  nom du partenaire',
            'message.required'=>'Veuillez renseigner votre message',

];
        $this->validate($request,[
            'email'=>'required|email',
            'name'=>'string|required',
            'prenoms'=>'string|required',
            'phone'=>'string|required',
            'message'=>'required',
            
            ],$message);

            $data = $request->all();
            $status = Message::create($data);

            if($status){
                return back()->with('success','Message bien envoyé Merci');
            }else{
                return back()->with('error','Une erreur c\'est produite');
            }
    }
}
