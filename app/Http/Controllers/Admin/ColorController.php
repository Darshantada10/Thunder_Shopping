<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('Admin.Color.index',compact('colors'));
    }
    public function create()
    {
        return view('Admin.Color.create');
    }

    public function save(ColorFormRequest $request)
    {
        $data = $request->validated();
        $data['status'] = $request->status == true ? '1':'0';

        Color::create($data);
        return redirect('/admin/colors')->with('message','Color Added Successfully');
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('Admin.Color.update',compact('color'));
    }

    public function update($id,ColorFormRequest $request)
    {
        $data = $request->validated();

        $color = Color::findOrFail($id);

        $color->update([
            'name'=>$data['name'],
            'code'=>$data['code'],
            'status'=>$request->status == true ? '1':'0',
        ]);
        return redirect('/admin/colors')->with('message','Color Updated Successfully');
    }

    public function delete($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect('/admin/colors')->with('message','Color Deleted Successfully');
    }
}
