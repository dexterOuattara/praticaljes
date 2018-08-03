<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateLoginController extends Controller
{
    //
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:candidate',['except' => ['logout']]);
    }

    //function to show admin login form
    public function showLoginForm() {
        return view('auth.candidate-login');
    }
    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //attempt to login the admins in
        if (Auth::guard('candidate')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successful redirect to admin dashboard
            return redirect()->intended(route('candidate.dashboard'));
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('candidate')->logout();

        return redirect('/');
    }
}
