<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function industries(){
        return view('pages.industry');
    }
    public function services(){
        return view('pages.services');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
}
