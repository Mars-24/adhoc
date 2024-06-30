<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category_blog;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\User;
use App\Models\Tags;

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
   


    public function service_design_detail(){
        return view('frontend.pages.service-detail');
    } 
    public function service_reseaux(){
        return view('frontend.pages.service-detail-reseau');
    } 
    public function service_web(){
        return view('frontend.pages.service-detail-web');
    } 
    public function service_marketing(){
        return view('frontend.pages.service-detail-marketing');
    } 
    public function service_shooting(){
        return view('frontend.pages.service-detail-shooting');
    } 
    public function service_management(){
        return view('frontend.pages.service-detail-management');
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
