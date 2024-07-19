<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   
    public function blog(){
        $blogdetails = BlogSection::where('status',1)->get();
        return view('website.blog' , compact('blogdetails'));
    }

    public function blogDetails($slug){
         $blogdetails = BlogSection::where('slug',$slug)->first();
         $blogsection = BlogSection::where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('website.blog-details', compact('blogdetails', 'blogsection'));
    }
}
