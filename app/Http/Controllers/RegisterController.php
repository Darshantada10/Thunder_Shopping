<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\WelcomeRegisterMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

        Mail::to($request->email)->send(new WelcomeRegisterMail($request->name));




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
            if(Auth::user()->role == 0)
            {
                return redirect('/home');
            }
            else if(Auth::user()->role == 1)
            {
                return redirect('/admin');
            }
            else if(Auth::user()->role == 2)
            {
                return redirect('/delivery');
            }
            else
            {
                return redirect('/login');
            }
        }
        else
        {
            dd("Your Password is incorrect");
        }

        // dd($data);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/home');
    }
}
