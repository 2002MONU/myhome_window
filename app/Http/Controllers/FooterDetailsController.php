<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterDetail;
class FooterDetailsController extends Controller
{

     public function footerDetails(){
        $footerdetail = FooterDetail::find(1);
        return view('admin.footerdetails',compact('footerdetail'));
     }
    public function footerUpdate($id){
       $footer = FooterDetail::find($id);
        return view('admin.footerupdate', compact('footer'));
    }

    public function footerUpdatePost(Request $request,$id){
       $request->validate([
         'footerabout' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact' => 'required|string|max:20',
        'facebook' => 'nullable|url|max:255',
        'vimeo' => 'nullable|url|max:255',
        'twitter' => 'nullable|url|max:255',
        'instagram' => 'nullable|url|max:255',
        'favicon' => 'nullable|image|mimes:png,jpg,jpeg|dimensions:min_width=100,min_height=100,max_width=400,max_height=400|max:512',
        'logo' => 'nullable|image|mimes:png,jpg,jpeg|dimensions:min_width=800,min_height=400,max_width=2000,max_height=1800|max:512',
       ]);

       $footer = FooterDetail::find($id);
       if($request->hasFile('favicon')){
        $filename = $request->file('favicon');
        $image = time().'.'.$filename->getClientOriginalName();
        $filename->move('website/logo',$image);
            // Delete the old image
        $oldImagePath = public_path('website/logo/' . $footer->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        $footer->favicon = $image;
        
     }
     if($request->hasFile('logo')){
        $filename1 = $request->file('logo');
        $image1 = time().'.'.$filename1->getClientOriginalName();
        $filename1->move('website/logo',$image1);
           // Delete the old image
        $oldImagePath1 = public_path('website/logo/' . $footer->logo);
        if (file_exists($oldImagePath1)) {
            unlink($oldImagePath1);
        }
        $footer->logo = $image1;
        
     }
     $footer->footerabout = $request->footerabout;
     $footer->title = $request->title;
     $footer->address = $request->address;
     $footer->email = $request->email;
     $footer->contact = $request->contact;
     $footer->facebook = $request->facebook;
     $footer->vimeo = $request->vimeo;
     $footer->twitter = $request->twitter;
     $footer->instagram = $request->instagram;
     $footer->save();

     return redirect()->route('footer-details')->with('success','Footer Details Update Successfully');
    }
}
