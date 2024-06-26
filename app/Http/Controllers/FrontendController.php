<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function tracking(){
        return view('frontend.tracking');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function service(){
        return view('frontend.service');
    }
}
