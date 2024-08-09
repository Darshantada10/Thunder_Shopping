<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    public function index()
    {
        // $productimages = ProductImage::with('product')->get();
        // $productimages = ProductImage::select('product_id',
        // DB::raw('MIN(id) as id'))
        // ->groupBy('product_id')
        // ->with('product')
        // ->get();

        // $productimages = ProductImage::whereIn('id',$productimages->pluck('id'))->with('product')->get();
        $productimages = ProductImage::with('product')->get()->groupBy('product_id');
        // dd($productimages);
        return view('ProductImage.Index',compact('productimages'));
    }

    public function createform()
    {
        $products = Product::all();
        // dd($products);
        return view('ProductImage.Create',compact('products'));
    }

    public function saveform(Request $request)
    {
        // dd($request);
        // dd($request['product_id']);
        $id = $request['product_id'];
        // dd($id);
        $product = Product::findOrFail($id);
        //  when we just created object so we had no data or information
        // dd($product);
        if($request->hasFile('image'))
        {
            $uploadpath = 'uploads/products/';
            $i=1;
            foreach($request->file('image') as $imagefile)
            {
                $extension = $imagefile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $imagefile->move($uploadpath,$filename);
                $finalimagepathname = $uploadpath.$filename;
                
                // $product->product_id = $id;
                // $product->image = $filename;
                // $product->save();
                // dd("before add",$id);
                $product->productimage()->create([

                    // 'product_id' => $request->product_id,
                    'product_id' => $id,
                    'image' => $finalimagepathname
                ]);
                // dd($filename);
            }
            
            // dd("inside if");
        }
        // else
        // {
        //     dd("inside else no image uplaoded");
        // }



        // dd($request);
        return redirect('/admin/product-images')->with('primary','Product Images Added Successfully');

    }

}
