<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ChangePasswordControlller extends Controller
{
    // change password form 
    public function changePassword(){
        if(auth()->guard('admin')){
           // $userdata = Admin::find(Auth::user()->id);
            return view('admin.account.change-password');
            }
            return redirect('admin/login')->with('error','Please Login First');
        
    }

    public function changePasswordPost(Request $request)
{
    // Validate the input data
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|same:confirm_password|min:8',
        'confirm_password' => 'required|same:new_password',
    ]);

    // Check if the old password is correct
    if (!Hash::check($request->old_password, auth()->guard('admin')->user()->password)) {
        return back()->with('error', "Current password is invalid");
    }

    // Check if the new password is the same as the old password
    if ($request->old_password === $request->new_password) {
        return back()->with('error', "New password cannot be the same as your current password.");
    }

    // Update the new password
    $admin = auth()->guard('admin')->user();
    $admin->password = Hash::make($request->new_password);
    $admin->save();

    return back()->with('success', "Password changed successfully!");
}

    }

