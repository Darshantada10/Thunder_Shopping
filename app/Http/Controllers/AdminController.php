<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        return view('Admin.Home.Index');
    }
    public function Testing()
    {
        // dd("inside controller");
        // $products = Product::whereHas('brands', function($query)
        // {
        //     $query->where('name');
        // })->get();

        $products =  Product::find(5);
        $products= $products->brand;

        // $data = $products->brand();
        dd($products);
    }

}
