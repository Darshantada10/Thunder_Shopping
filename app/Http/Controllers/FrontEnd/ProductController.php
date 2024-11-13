<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug,$id)
    {
        // $product = Product::findOrFail($id);
        $product = Product::where('id',$id)->where('slug',$slug)->first();
        // dd($product->productimage);
        return view('FrontEnd.Product.index',compact('product'));
    }
}
