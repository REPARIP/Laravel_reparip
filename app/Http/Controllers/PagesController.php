<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return view('pages.index'); --> Original Code
        $title = "Welcome to Laravel!";
        return view("pages.index")->with('title', $title);
    }
    
    public function about(){
         //return view("pages.about"); --> Original Code
         $title = "About Us";
         return view("pages.about")->with('title', $title);
    }
    
    public function services(){
        //return view("vpages.service"); --> Original Code
        $data = array(
            'title' => 'Services',
            'service' => ['Web Design', 'Programming', 'SEO']
        );
        return view("pages.services")->with($data);
    }
}