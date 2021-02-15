<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
        return view('front.index');
    }

    public function login(Request $request){
        //validate the form
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        //attempt to log use in
        if(Auth::guard('web')->attempt(['email'=>$request->email, 'password'=> $request->password],$request->remember)){
            return redirect()->intended(route('dashboard'));
        }
        //if Unsuccessful, th en redirect back to login form
        return redirect()->back()->with('error','These credentials do not match our records.');
    }
}
