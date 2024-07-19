<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\FooterDetail;

class LoginController extends Controller
{ 
    //admin login form 
    public function login(){
        $footer = FooterDetail::find(1);
        return view('admin.account.login',compact('footer'));
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' =>    $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            return redirect('admin/dashboard')->with('success', 'You are Login in sucessfully.');
        } else {
            return back()->with('error', 'oops! invalid email and password.');
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
      //  Session::flash();
       return redirect('admin/login')->with('success','You are logout successfully');
    }
}
