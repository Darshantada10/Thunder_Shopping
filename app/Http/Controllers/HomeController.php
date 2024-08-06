<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

        $products = Product::all();
        // dd($products);
        return view("Home.Index",compact('products'));
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
