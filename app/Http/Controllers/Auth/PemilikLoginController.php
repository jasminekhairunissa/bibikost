<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PemilikLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:pemilik', ['except' => ['logoutpemilik']]);
    }

    /*//nampilih halaman login
    public function showLoginform() 
    {
    	return view('auth.login')
    }*/

    public function login(Request $request)
    {
    	//validasi data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	//attempt to login
    	$credentials = $request->only('email', 'password');
	    if (Auth::guard('pemilik')->attempt($credentials, $request->input('remember'))) { // if successful
	    	//return redirect()->intended(route('home.pemilik'));
	    	echo 'a';
	    }else{

	    return redirect()->back()->withInput($request->except('password'))->with('status', 'Login gagal');}
    }

    public function logoutpemilik(Request $request)
    {
    	Auth::guard('pemilik')->logout();
    	$request->session()->flush();
    	$request->session()->regenerate();
    	echo 'logged out';
    }
}


