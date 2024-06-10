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
        Brand::create([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
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
        // dd($id);

        $brand =  Brand::findOrFail($id);

        $brand->update([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
        ]);

        return redirect('/admin/brands')->with('success','Brand Updated Successfully');
    }

    public function DeleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect ('/admin/brands')->with('danger','Brand Deleted Successfully');


    }
}
