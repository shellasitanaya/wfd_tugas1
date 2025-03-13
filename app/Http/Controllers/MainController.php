<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'Home Page']);
        
    }

    public function catalogue()
    {
        return view('catalogue', ['title' => 'Katalog Page']);
        
    }

    public function aboutus()
    {
        return view('aboutus', ['title' => 'About Us Page']);
        
    }
}
