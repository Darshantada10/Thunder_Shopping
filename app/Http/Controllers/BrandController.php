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

        return redirect('/admin/brands');

    }
}
