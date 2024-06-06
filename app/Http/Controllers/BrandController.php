<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function Index()
    {
        return view('Brands.Index');
    }
    public function CreateForm()
    {
        return view('Brands.Create');
    }
}
