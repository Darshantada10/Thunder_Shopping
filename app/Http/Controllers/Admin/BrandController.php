<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $categories = Category::where('status','=','0')->get();
        return view('Admin.Brand.Index',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request['name']);
        // dd($request->name);
        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'status'=> $request->status == true ? '1' : '0',
            'category_id' => $request->category_id
        ]);

        // $brand = new Brand;

        // $brand->name = $request->name;
        // $brand->slug = Str::slug($request->slug);
        // $brand->status = $request->status == true ? '1' : '0';
        // $brand->category_id = $request->category_id;
        // // dd($brand);
        // $brand->save();
        return response()->json(['success'=>"brand saved successfully"]);
    }
}
