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

    public function allbrands()
    {
        // this is api endpoint
        $brands = Brand::all();
        return response()->json(['brands'=>$brands]);
        // return response()->json($brands);
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
        // session()->flash('message','Brand Saved Successfully');
        return response()->json(['success'=>"Brand Saved Successfully"]);
        // return redirect()->back()->with(['message'=>"Brand Saved Successfully"]);
    }

    public function fetchdata($id)
    {
        $data = Brand::with('category')->findOrFail($id);
        // $data = Brand::findOrFail($id)->with('category')->get();
        // dd($data);
        return response()->json($data);
    }

    public function updatedata($id, Request $request)
    {
        $data = Brand::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'status' => $request->status == true ? '1' : '0',
            'category_id' => $request->category_id,
        ]);
        return response()->json(['success'=>"Brand Updated Successfully"]);

        // dd($data,$request);
    }

    public function deletedata($id)
    {
        // dd($id);
        $brand = Brand::find($id);
        $brand->delete();
        return response()->json(['success'=>"Brand Deleted Successfully"]);

    }
}
