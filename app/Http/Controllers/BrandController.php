<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function Index()
    {
        $brands = Brand::all();
        // $brands = DB::table('brands')->get();
        // $brands = DB::select('Select * from brands');

        // dd($brands);
        return view('Brands.Index',compact('brands'));
        // return view('Brands.Index');
    }
    public function CreateForm()
    {
        return view('Brands.Create');
    }
    public function Save(Request $request)
    {
        // dd($request);

        $upload_logo = null;
        if($request->hasFile('logo'))
        {
            // $logo = $request->file('logo');
            // $filename = $request->logo.$logo->getClientOriginalExtension();
            // $path = $_SERVER['DOCUMENT_ROOT'].'/logo/'.$request->logo;

            // $logo->move($path,$filename);

            // dd($logo);

            $logo = $request->file('logo');
            $extension = $logo->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $logo->move('brands/logo',$filename);
            $upload_logo = $filename;

        }

        Brand::create([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
            'logo'=>$upload_logo,
        ]);

        return redirect('/admin/brands')->with('primary','Brand Created Successfully');

    }

    public function UpdateForm($id)
    {
        // "SELECT * FROM BRANDS WHERE id = $id";
        // dd($id);
        // dd("inside controller");
       $brand =  Brand::findOrFail($id);
        // dd($brand);
        return view('Brands.Update',compact('brand'));


    }
    public function UpdateData(Request $request,$id)
    {
        // dd($request);

        $brand =  Brand::findOrFail($id);
        // $upload_logo = null;

        // dd($brand);

        $upload_logo = $brand->logo;

        if($request->hasFile('logo'))
        {
            $logo = $request->file('logo');
            $extension = $logo->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $logo->move('brands/logo',$filename);
            $upload_logo = $filename;
        }

        $brand->update([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
            'logo'=>$upload_logo,
        ]);



        return redirect('/admin/brands')->with('success','Brand Updated Successfully');
    }

    public function DeleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect ('/admin/brands')->with('danger','Brand Deleted Successfully');


    }
    public function APIBrands()
    {
        $brands = Brand::all();
        // echo $brands;

        // return response()->json(['brands'=>$brands]);
        return response(['brands'=>$brands]);
    }
}