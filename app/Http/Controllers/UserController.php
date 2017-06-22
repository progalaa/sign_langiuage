<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    public function signform()
    {
        return view('admin/layouts/signup');
    }
    
    public function signup(Request $request)
    {
        $name =$request['username'];
        $password =$request['password'];
        $user = new User();
        $user->name =$name;
        $user->password =$password;
        $user->save();
        Auth::login($user);
        //return "added";
        return Redirect()->route('login');
    }

    public function login()
    {
        return view('admin/layouts/login');
    }
    
    public function handleLogin(Request $request)
    {
       if (Auth::attempt(['name' =>$request['username'] ,'password'=>$request['password']]))
        {
            print("asdamsd");
            return $request['username'] ." ".$request['password'];die();
            //return Redirect()->route('dashboard');
	    }
        else
        {
            return Redirect()->back();
        }
    }
    
    public function getLogout()
    {
            Auth::logout();
            return redirect()->route('login');
    }
        
    public function dashboard()
    {
        return view('admin/layouts/home');
    }
}
