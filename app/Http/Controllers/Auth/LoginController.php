<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    { //avoid logged in users to login
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'email'=> 'required|email',
            'password'=> 'required',//|confirm will look for any input with confirm and make sure it matches the input
        ]);
        if(!auth()->attempt($request->only('email','password'), $request->remember)) {
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
