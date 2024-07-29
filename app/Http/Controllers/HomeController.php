<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd("Inside Controller");
        // dd("Inside Method dd wala");
        // print_r("Inside Method printr wala");
        // Do and Die

        // return view("Layouts/App");
        // return view("Layouts.App");
        return view("Home.Index");
    }
    public function about()
    {
        return view("Home.about");
    }
    public function service()
    {
        return view("Home.service");
    }
}
