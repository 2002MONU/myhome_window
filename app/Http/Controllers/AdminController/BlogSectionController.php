<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BlogSectionController extends Controller
{
    // Blog Details
    public function blogDetails(){
        $blogsection = BlogSection::get();
        return view('admin.blogPage.blogDetails', compact('blogsection'));
    }

    // blog add form 
    public function addBlog(){
        return view('admin.blogPage.addBlog');
    }

  // add blog page details 
    public function addBlogPost(Request $request){
          $request->validate([
            'image' => 'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=700,min_height=600,max_width=2500,max_height=1200',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
            //'slug' => 'required|max:100',
            'status' => 'required',
            'writer' => 'required|string|max:30',
          ]);

          $blogsection = new BlogSection;
          // image blog section
          $img_extension = $request->file('image')->getClientOriginalExtension();
          $name =  time() . '.' . $img_extension;
          $pathimage = $request->file('image')->move(public_path('website/blogpage'), $name); //image save public folder\ 
          
          $blogsection->image = $name;
          $blogsection->title = $request->title;
          $blogsection->description = $request->description;
          $blogsection->slug =  Str::slug($request->title); // slug generate auto
          $blogsection->writer = $request->writer;
          $blogsection->status = $request->status;
          $blogsection->save();
          return redirect()->route('admin.blogdeatils')->with('success','Blog Details Add Successfully');
    }
    
    // update blog form
    public function updateBlog($id){
        $blogsection = BlogSection::find($id);
        return view('admin.blogPage.updateblog',compact('blogsection'));
    }

        // update blog data 
    public function updateBlogPost(Request $request,$id){
        $request->validate([
            'image' => 'max:512|mimes:jpeg,png,jpg|dimensions:min_width=700,min_height=600,max_width=2500,max_height=1200',
            'title' => 'required|max:100',
            'description' => 'required',
           // 'slug' => 'required|max:100',
            'status' => 'required',
            'writer' => 'required|max:30',
          ]);

          $blogsection = BlogSection::find($id);
          // image blog page
          if($request->hasFile('image')){
            $filename = $request->file('image');
            $image = time().'.'.$filename->getClientOriginalName();
            $filename->move('website/blogpage',$image);
                // Delete the old image
            $oldImagePath2 = public_path('website/blogpage/' . $blogsection->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $blogsection->image = $image;
            
         }
         $blogsection->title = $request->title;
         $blogsection->description = $request->description;
         $blogsection->slug = Str::slug($request->title);
         $blogsection->writer = $request->writer;
         $blogsection->status = $request->status;
         $blogsection->save();
         return redirect()->route('admin.blogdeatils')->with('success','Blog Details Update Successfully');
    }
     
    // delete blog details with image folder
    public function blogDelete($id){
        $blogsection = BlogSection::find($id);
        // old image delete form folder 
        if($blogsection)
          {
            $imagepath = public_path('website/blogpage/'.$blogsection->image);
            if(file_exists($imagepath))
            {
                unlink($imagepath);
            }
             $blogsection->delete();
            return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Image record not found.');
        }
    }
}
