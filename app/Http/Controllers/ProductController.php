<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('Products.Index');
    }
    public function createform()
    {
        $brands = Brand::all();
        // dd($brands);
        return view('Products.Create',compact('brands'));
    }
    public function savedata(Request $request)
    {
        
        // dd($request);
        // Brand::create([
        //     'name'=>$request->name,
        //     'seller'=>$request->seller,
        //     'origin'=>$request->origin,
        //     'location'=>$request->location,
        //     'rating'=>$request->rating,
        //     // 'logo'=>$upload_logo,
        // ]);

        return redirect('/admin/brands')->with('primary','Brand Created Successfully');
    }
}
