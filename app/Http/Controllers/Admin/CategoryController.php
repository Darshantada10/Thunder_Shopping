<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('Admin.Category.index',compact('categories'));
    }
    
    public function create()
    {
        return view('Admin.Category.create');
    }

    // public function store(Request $request)
    public function store(CategoryFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();

        $category = new Category;

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->image = null;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? "1" : "0";
        $category->save();

        return redirect('/admin/category')->with('message','Category Created Successfully');
    }

    public function edit($slug,$id)
    {
        // $data = Category::findOrFail($id);
        $data = Category::where('id',$id)->where('slug',$slug)->first();
        // dd($data->slug);
        return view('Admin.Category.update',compact('data'));
    }

    public function update($slug,$id,CategoryFormRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();
        $category = Category::where('id',$id)->where('slug',$slug)->first();
        // dd($category);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';

        if($request->hasFile('image'))
        {
            $path = 'uploads/category/'.$category->image;

            //file is an inbuilt
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->update();
        return redirect('/admin/category')->with('message','Category Updated Successfully');

   }

   public function destroy($id)
   {
        $category = Category::findOrFail($id);
        $path = 'uploads/category/'.$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();
        return redirect('/admin/category')->with('message','Category Deleted Successfully');
   }

}
