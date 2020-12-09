<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function login()
    {
    		return view('auth/login');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/viewmasalah');

    	}
    	return redirect ('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }

  public function register()
  {
  		return view('pages/register');
  }

  public function postregister(Request $request)
  {
  	$user = new \App\User;
  	$user->name = $request->name;
  	$user->nopen = $request->nopen;
  	$user->email = $request->email;
  	$user->password = bcrypt($request->password);
  	$user->remember_token = Str::random(60);
  	$user->save();

  	return redirect('/login')->with('Pendaftaran Berhasil');

  }

}
