<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.Register');
    }

    public function savedata(Request $request)
    {
        // dd($request); // do and die
        // dd($request->email);
        // $registeruser = new User;

        // // $registeruser->name = "Admin";
        // $registeruser->name = $request->name;
        // // dd("virus");
        // $registeruser->email = $request->email;
        // $registeruser->password = $request->password;

        // $registeruser->save();

        


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);






        return redirect('/login');
        // dd($registeruser);


        // dd($request);
        // dd($_REQUEST);
    }


    public function login()
    {

        return view('Auth.Login');

        // $data = User::select('name','email')->get();

        // $data = DB::table('users')->get();
        // $data = DB::select('SELECT name, email FROM USERS ');
        // dd($data);

        // $data = User::all();
        // echo $data;


        // dd("login page");
    }

    public function verify(Request $request)
    {
        // dd($request);
        // dd($request->only('email'));
        $data = $request->only('email','password');
        
        // dd($data);
        if(Auth::attempt($data))
        {
            dd("Your Password is correct");
        }
        else
        {
            dd("Your Password is incorrect");
        }

        // dd($data);
    }
}
