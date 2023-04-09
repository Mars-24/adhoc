<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
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
    public function contact(){
        return view('frontend.pages.contact');
    }
}
