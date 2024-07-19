<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\AboutProject;
class AboutPageControlller extends Controller
{ 
    // about page details 
    public function aboutdetailsAbout(){
        $about = AboutPage::find(1);
        return view('admin.aboutPage.aboutdetails', compact('about'));
    }
   // about page form edit 
    public function aboutUpdate($id){
       $about = AboutPage::find($id);
       return view('admin.aboutPage.editabout', compact('about'));
    }
     
    // about page update details 
    public function aboutPost(Request $request, $id){
        $request->validate([
            'heading' => 'required|max:50',
            'title' => 'required|Max:100',
            'description' => 'required|max:500',
            'image1' => 'mimes:jpeg,png,jpg|max:512|dimensions:min_width=450,min_height=450,max_width=600,max_height=900',
            'image2' => 'mimes:jpeg,png,jpg|max:512|dimensions:min_width=200,min_height=200,max_width=500,max_height=500',
        ]);
        $about = AboutPage::find($id);
        // image 1 about page 
        if($request->hasFile('image1')){
            $filename1 = $request->file('image1');
            $image1 = time().'.'.$filename1->getClientOriginalName();
            $filename1->move('website/aboutpage',$image1);
           $about->image1 = $image1;
        }
        // about page image 2
        if($request->hasFile('image2')){
            $filename = $request->file('image2');
            $image = time().'.'.$filename->getClientOriginalName();
            $filename->move('website/aboutpage',$image);
            $about->image2 = $image;
        }
        $about->heading = $request->heading; 
        $about->title = $request->title; 
        $about->description = $request->description;
        $about->save();
        return redirect()->route('about-pagedetails')->with('success','Update Successfully'); 
    }
 

     // about project details show 
    public function aboutProject(){
        $aboutproject = AboutProject::find(1);
        return view('admin.aboutPage.about-pageproject', compact('aboutproject'));
    }

    // about project edit form 
    public function aboutProjectUpdate($id){
        $aboutproject = AboutProject::find(1);
        return view('admin.aboutpage.updateproject', compact('aboutproject'));
    }

   // about page edit form submit data
    public function aboutProjectUpdatePost(Request $request, $id){
           $request->validate([
            'heading' => 'required|max:50',
        'description' => 'required|max:500',
        'satisfied_clients' => 'required|integer',
        'total_products' => 'required|integer',
        'years_of_build' => 'required|integer',
        'total_revenue' => 'required|integer',
           ]);
           
           $projectabout =  AboutProject::find($id);
           $projectabout->heading = $request->heading;
           $projectabout->description = $request->description;
           $projectabout->satisfied_clients = $request->satisfied_clients;
           $projectabout->total_products = $request->total_products;
           $projectabout->years_of_build = $request->years_of_build;
           $projectabout->total_revenue = $request->total_revenue;
           $projectabout->save();
           return redirect()->route('about-Project')->with('success','About Project Details Update Successfully');
    }
}
