<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate(10);
        // dd($products->name);
        return view('Admin.Product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status','0')->get();
        return view('Admin.Product.create',compact('categories','brands','colors'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        $product_color = $product->productcolors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id',$product_color)->get();

        return view('Admin.Product.update',compact('categories','product','brands','colors'));
    }

    public function save(ProductFormRequest $request)
    {
        // dd("inside controller");
        $data = $request->validated();
        // dd($data); 
        
        $category = Category::findOrFail($data['category_id']);

        $product = $category->products()->create([

            'category_id' => $data['category_id'],
            'brand_id' => $data['brand_id'],
            'name' => $data['name'],
            'slug' => Str::slug($data['slug']),
            'small_description' => $data['small_description'],
            'description' => $data['description'],
            'original_price' => $data['original_price'],
            'selling_price' => $data['selling_price'],
            'quantity' => $data['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'featured' => $request->featured == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            'meta_title' => $data['meta_title'],
            'meta_keyword' => $data['meta_keyword'],
            'meta_description' => $data['meta_description'],
        ]);

        if($request->hasFile('image'))
        {
            $uploadpath = 'uploads/products/';

            $i = 1;

            foreach ($request->file('image') as  $imagefile) 
            {
                $extension = $imagefile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $imagefile->move($uploadpath,$filename);

                $finalimage = $uploadpath.$filename;

                $product->productimage()->create([
                    'product_id' => $product->id,
                    'image' => $finalimage
                ]);

            }
        }

        // dd($request->colors);
        if($request->colors)
        {
            foreach($request->colors as $key => $value)
            {
                // dd($key,$value);
                $product->productcolors()->create([
                    'product_id' => $product->id,
                    'color_id' => $value,
                    'quantity' => $request->colorquantity[$key] ?? 0,
                ]);
            }
        }

        return redirect('/admin/products')->with('message','Product Created Successfully');
    }
}
