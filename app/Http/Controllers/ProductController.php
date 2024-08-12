<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Arr;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // eager loading (loaded when required)
        $products = Product::with('brand')->get();
        // $products = DB::table('products')->join('brands','products.brand_id','=','brands.id')
        // ->select('products.*','brands.name as brand_name')->get();

        // $products = Product::all();
        // $brands= Brand::all()->keyBy('id');
        // foreach($products as $product)
        // {
        //     $product->brand_name = $brands[$product->brand_id]->name;
        // }

        // dd($products);
        return view('Products.Index',compact('products'));
    }

    // public function tempdemo()
    // {
        // ProductImage::create([
        //     'product_id' => 5,
        //     'image' => "a random string with another method",
        // ]);

        // $image = new ProductImage;
        // $image->product_id = 5;
        // $image->image = "a random string";
        // $image->save();
        // dd("saved to db");
    // }
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
        // $new_data = $request(validate([
        //     'name' => 'required,max:360'
        // ]))
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
        // dd($id);
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect ('/admin/products')->with('danger','Product Deleted Successfully');
    }
}
