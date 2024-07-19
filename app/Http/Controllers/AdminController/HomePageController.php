<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Homebanner;
use App\Models\HomeAbout;
use App\Models\HomeFeature;
use App\Models\HomeService;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class HomePageController extends Controller
{ 
    // home banner details
    public function hbannerdetails(){
        $home = Homebanner::get();
        return view('admin.homepage.hbannerdetails', compact('home'));
    }
    
    // add banner add form
    public function addhbanner(){
        return view('admin.homepage.addhomebanner');
    }
    
    public function addhbannerPost(Request $request){
              $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=700,max_width=3500,max_height=2000',
                'status' => 'required',
              ]);

        $homebanner = New Homebanner;
        // image code
        $img_extension = $request->file('image')->getClientOriginalExtension();
      $name =  time() . '.' . $img_extension;
      $pathimage = $request->file('image')->move(public_path('website/homepage'), $name); //image save public folder\ 
      
      $homebanner->image = $name;
      $homebanner->status = $request->status;
      $homebanner->save();
      return redirect()->route('home.hbannerdetails')->with('success',"Home Banner Add Successfully"); 
    }

     // banner delete
    public function bannerdelete($id){
        $home = Homebanner::where('id',$id)->first();
          if($home)
          {
            $imagepath = public_path('website/homepage/'.$home->image);
            if(file_exists($imagepath))
            {
                unlink($imagepath);
            }

            $home->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }

    public function bannerupdate($id){
        $home = Homebanner::find($id);
        return view('admin.homepage.bannerupdate', compact('home'));
    }

    public function bannerupdatepost(Request $request,$id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=1200,min_height=700,max_width=3500,max_height=2000',
            'status' => 'required',
          ]);
          $home = Homebanner::find($id);
          if($request->hasFile('image')){
            $filename = $request->file('image');
            $image = time().'.'.$filename->getClientOriginalName();
            $filename->move('website/homepage',$image);
                // Delete the old image
            $oldImagePath2 = public_path('website/homepage/' . $home->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $home->image = $image;
            
         }
         $home->status = $request->status;
         $home->save();
         return redirect()->route('home.hbannerdetails')->with('success',"Home Banner Update Successfully"); 
    }

     // home about details 
     public function aboutdetails(){
        $homeabout = HomeAbout::find(1);
        return view('admin.homepage.aboutdetails',compact('homeabout'));
     }
           
     //about update form
      public function aboutupdate(){
        $homeabout = HomeAbout::find(1);
        return view('admin.homepage.aboutupdate',compact('homeabout'));
     }
       // home about post update like experience and happy client and project details
     public function aboutupdatepost(Request $request,$id){
          $request->validate([
           'title' => 'required|max:100',
           'description' => 'required|max:1000',
           'experiance' => 'required|max:10',
           'happyclient' => 'required|max:10',
           'projectdeli' => 'required|max:10',
           'quality' => 'required|max:10',
          ]);

          $homeabout  = HomeAbout::find($id);
          $homeabout->description = $request->description;
          $homeabout->experiance = $request->experiance;
          $homeabout->happyclient = $request->happyclient;
          $homeabout->projectdeli = $request->projectdeli;
          $homeabout->quality = $request->quality;
          $homeabout->save();

          return redirect()->route('home.about-details')->with('success','Home About Details Update Successfully');
     }

     // home services 

     public function homeServices(){
        $homeservice = HomeService::paginate(2);
        return view('admin.homepage.homeservices', compact('homeservice'));
     }

     public function addHomeServices(){
        return view('admin.homepage.addservices');
     }

     public function addHomeServicesPost(Request $request){
            $request->validate([
                'doortype' => 'required|max:50',
                'doorimage' => 'required|max:1024|image|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=1200,max_height=2000',
            ]);
            $homeservice = new HomeService;
            $homeservice->doortype = $request->doortype;
            $file = $request->file('doorimage')->getClientOriginalExtension();
            $filename = time().'.'.$file;
            $filepath = $request->file('doorimage')->move(public_path('website/homepage'),$filename);

            $homeservice->doorimage = $filename;
            $homeservice->status = $request->status;
            $homeservice->save();
            return redirect()->route('home.services')->with('success','Home services add successfully');
     }

   public function homeServicesDelete($id){
    $homeservice = HomeService::where('id',$id)->first();
          if($homeservice)
          {
            $imagepath = public_path('website/homepage/'.$homeservice->doorimage);
            if(file_exists($imagepath))
            {
                unlink($imagepath);
            }
             $homeservice->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
   }
       // home service update
   public function homeServiceUpdate($id){
    $services = HomeService::find($id);
    return view('admin.homepage.serviceUpdate', compact('services'));
   }

   public function ServiceUpdatePost(Request $request,$id){
        $request->validate([
            'doortype' => 'required|max:50',
            'doorimage' => 'max:1024|image|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=1200,max_height=2000',
        ]);
        $homeservice = HomeService::find($id);
        if($request->hasFile('doorimage')){
            $filename = $request->file('doorimage');
            $image = time().'.'.$filename->getClientOriginalName();
            $filename->move('website/homepage',$image);
                // Delete the old image
            $oldImagePath2 = public_path('website/homepage/' . $homeservice->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $homeservice->doorimage = $image;
            
         }
         $homeservice->doortype = $request->doortype;
         $homeservice->status = $request->status;
         $homeservice->save();
         return redirect()->route('home.services')->with('success','Home services add successfully');

   }
 
   // Home Page Our features details show in admin 
    public function ourFeaturesdetails(){
        $ourfeature = HomeFeature::paginate(4);
        return view('admin.homepage.ourFeatures', compact('ourfeature'));
    }
   // our feature add form
    public function ourFeaturesadd(){
        return view('admin.homepage.addFeatures');
    }
   // our feature add 
    public function ourFeaturesPost(Request $request){
        $request->validate([
            'feature' => 'required|max:50',
            'icon' => 'required|max:512|image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100,max_width=300,max_height=300',
        ]);

        $features = new HomeFeature;
        $features->feature = $request->feature;
        // feature icon add 
        $file = $request->file('icon')->getClientOriginalExtension();
        $filename = time().'.'.$file;
        $filepath = $request->file('icon')->move(public_path('website/homepage'),$filename);
        $features->icon = $filename;
        $features->status = $request->status;
        $features->save();
        return redirect()->route('home.ourfeatures')->with('success','Our features add successfully');
    }
  //  our feature update form
    public function featuresUpdate($id){
        $feature = HomeFeature::find($id);
        return view('admin.homepage.updateFeatures',compact('feature'));
     }
  //  our feature Update
    public function featuresUpdatePost(Request $request,$id){
        $request->validate([
            'feature' => 'required|max:50',
            'icon' => 'max:512|image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100,max_width=300,max_height=300',
        ]);
        $feature = HomeFeature::find($id);
        //  image code 
        if($request->hasFile('icon')){
            $filename = $request->file('icon');
            $image = time().'.'. $filename->getClientOriginalExtension();
            $filename->move('website/homepage',$image);
                // Delete the old image
            $oldImagePath2 = public_path('website/homepage/' . $feature->icon);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $feature->icon = $image;
            
         }
         $feature->feature = $request->feature;
         $feature->status = $request->status;
         $feature->save();
         return redirect()->route('home.ourfeatures')->with('success','Our features Update successfully');
    }

    // our feature delete 
    public function featuresDelete($id){
          $ourfeature = HomeFeature::find($id);
          if($ourfeature)
          {
            $imagepath = public_path('website/homepage/'.$ourfeature->icon);
            if(file_exists($imagepath))
            {
                unlink($imagepath);
            }
             $ourfeature->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }
  
   // testimonialDetails
   public function testimonialDetails(){
    $testimonial = Testimonial::get();
    return view('admin.homepage.testimonials-details', compact('testimonial'));
   }

   public function testimonialAdd(){
    return view('admin.homepage.addtestimonial');
   }

   public function testimonialPost(Request $request){
               $request->validate([
                'image' => 'required|image|max:512',
                'clientname' => 'required|max:50',
                'description' => 'required|max:700',
                'designation' => 'required|max:50',
                'status' => 'required',
               ]);
            $testimonial = new Testimonial;
            $file = $request->file('image')->getClientOriginalExtension();
            $filename = time().'.'.$file;
            $filepath = $request->file('image')->move(public_path('website/homepage'),$filename);
            $testimonial->clientname = $request->clientname;
            $testimonial->description = $request->description;
            $testimonial->designation = $request->designation;
            $testimonial->image = $filename;
            $testimonial->status = $request->status;
            $testimonial->save();
            return redirect()->route('testimonials-details')->with('success','Testimonials Add Successfully');
            
   }

   public function testimonialUpdate($id){
      $testi = Testimonial::find($id);
      return view('admin.homepage.updatesti' , compact('testi'));
   }

   public function testimonialUpdatePost(Request $request,$id){
      $request->validate([
        'image' => 'image|max:512',
                'clientname' => 'required|max:50',
                'description' => 'required|max:700',
                'designation' => 'required|max:50',
                'status' => 'required',
      ]);
      $testi = Testimonial::find($id);
      if($request->hasFile('image')){
        $filename = $request->file('image');
        $image = time().'.'. $filename->getClientOriginalExtension();
        $filename->move('website/homepage',$image);
            // Delete the old image
        $oldImagePath2 = public_path('website/homepage/' . $testi->image);
        if (file_exists($oldImagePath2)) {
            unlink($oldImagePath2);
        }
        $testi->image = $image;
        
     }
           $testi->clientname = $request->clientname;
            $testi->description = $request->description;
            $testi->designation = $request->designation;
             //$testimonial->image = $filename;
            $testi->status = $request->status;
            $testi->save();
            return redirect()->route('testimonials-details')->with('success','Testimonials Update Successfully');
            
   }

   // testinomonial delete section 
   public function testimonialDelete($id){
        $testi = Testimonial::find($id);
        // image delete form folder 
        if($testi)
          {
            $imagepath = public_path('website/homepage/'.$testi->icon);
            if(file_exists($imagepath))
            {
                unlink($imagepath);
            }
            
             $testi->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
   }
}
