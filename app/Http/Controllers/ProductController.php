<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Products.Index',compact('products'));
    }
    public function createform()
    {
        $brands = Brand::all();
        // dd($brands);
        return view('Products.Create',compact('brands'));
    }
    public function savedata(Request $request)
    {
        $id = $request['brand_id'];
        $data = $request->except('_token','brand_id');
        // dd($data);

        // $newdata = $data->except('brand_id');
        // $newdata = unset($data['brand_id']);
        // $newdata = Arr::except($data,['brand_id']);
        Product::create([
            'brand_id' => $id,
            // 'product_data' => $newdata
            'product_data' => $data
        ]);



        // dd($request);
        // Brand::create([
        //     'name'=>$request->name,
        //     'seller'=>$request->seller,
        //     'origin'=>$request->origin,
        //     'location'=>$request->location,
        //     'rating'=>$request->rating,
        //     // 'logo'=>$upload_logo,
        // ]);

        return redirect('/admin/products')->with('primary','Product Added Successfully');
    }

    public function updateform($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::all();
        return view('Products.Update',compact('product','brands'));
    }

    public function saveupdatedata($id,Request $request)
    {
        $brand_id = $request['brand_id'];
        $data = $request->except('_token','brand_id','_method');

        $product = Product::findOrFail($id);

        $product->update([
            'brand_id' => $brand_id,
            'product_data' => $data
        ]);
        return redirect('/admin/products')->with('success','Product Updated Successfully');

        // dd($id,$request);
    }

    public function deletedata($id)
    {
        dd($id);
    }
}
