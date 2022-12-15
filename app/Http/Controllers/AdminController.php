<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistrationRequest;

class AdminController extends Controller
{
     public function index()
     {
       // dd('asdf');
     return view("backend.index");
 }
    public function login()
    {
        return view('Site.index');
    }  
      
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registration()
    {
        return view('Site.register');
    }

    public function customRegistration(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [

            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'cnic' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'DOB' => 'required',
            'Description' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
           'fname' =>$request->fname,
           'lname' =>$request->lname,
           'phone' =>$request->phone,
           'cnic' =>$request->cnic,
           'country' =>$request->country,
           'city' =>$request->city,
           'gender' =>$request->gender,
           'email' =>$request->email,
           'DOB' =>$request->DOB,
           'Description' =>$request->Description,
           'password' => \Hash::make($request->password),
           'cpassword' => 'safasdf'
          
        ]);

        // if(\Auth::attempt($user->only('email','password'))){
        //     return redirect('dashboard');
        // }
    }


    public function store(Request $request) {
        auth()->logout();
        return redirect()->route('home');
    }



    public function user()
    {
        $users = User::orderBy('id','desc')->get();
        return view('backend.User.index',compact('users'));
    }

}
