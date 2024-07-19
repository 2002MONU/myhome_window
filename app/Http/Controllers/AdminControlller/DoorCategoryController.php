<?php

namespace App\Http\Controllers\AdminControlller;

use App\Http\Controllers\Controller;
use App\Models\DoorCategory;
use App\Models\DoorCategoryDetail;
use App\Models\DoorSize;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class DoorCategoryController extends Controller
{
    
    // door category type
    public function doorCategory(){
        $category = DoorCategory::get();
        return view('admin.doorsection.doorcatetype',compact('category'));
    }

    public function addCategory(){
        
        return view('admin.doorsection.addcategory');
    }

    public function addCategoryPost(Request $request){
        $request->validate([
            'title' => 'required|max:50',
            'status' => 'required',
        ]);

        $category = new DoorCategory;
        $category->title = $request->title;
        $category->status = $request->status;
        $category->slug = Str::slug($request->title);
        $category->save();

        return redirect()->route('door-category')->with('success','Category Add Successfully');
    }

     public function updateCategory($id){
        $cate = DoorCategory::find($id);
        return view('admin.doorsection.categoryupdate', compact('cate'));
     }

     public function updateCategoryPost(Request $request,$id){
        $request->validate([
            'title' => 'required|max:50',
            'status' => 'required',
        ]); 
        $category = DoorCategory::find($id);
        $category->title = $request->title;
        $category->status = $request->status;
        $category->slug = Str::slug($request->title);
        $category->save();

        return redirect()->route('door-category')->with('success','Category Update Successfully');    
        }
     

    // door category
   public function categorydetails(){
        $category = DB::table('door_categories')
    ->select(
        'door_categories.title',
        'door_category_details.id',
        'door_category_details.slug1',
        'door_category_details.image1',
        'door_category_details.image2',
        'door_category_details.image3',
        'door_category_details.image4',
        'door_category_details.image5',
        'door_category_details.titletype',
        'door_category_details.doorbrand',
        'door_category_details.description',
        'door_category_details.doormodel',
        'door_category_details.price',
        'door_category_details.saleprice',
        'door_category_details.paragraph',
        'door_category_details.moredetails',
        'door_category_details.color',
        'door_category_details.woodtype',
        'door_category_details.prodimension',
        'door_category_details.status'
    )
    ->join('door_category_details', 'door_categories.id', '=', 'door_category_details.category_id')
    // ->where('door_category_details.id', $id)
    ->get();
    return view('admin.doorsection.catedetails',compact('category'));
   }

    public function categoryadd(){
        $category = DoorCategory::where('status',1)->get();
        return view('admin.doorsection.addcatdetails', compact('category'));
    }

        public function categoryaddPost(Request $request){
            $request->validate([
               'image1' =>'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
               'image2' =>'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
               'image3' =>'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
               'image4' =>'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
               'image5' =>'required|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
               'category_id' => 'required',
               'title' => 'required|max:50',
               //'slug' => 'required',
               'required' => 'doorbrand',
               'required' => 'description|max:400',
               'price' => 'required|integer',
               'saleprice' => 'required|integer',
               'moredetails' => 'required',
               'paragraph' => 'required|max:400',
               'color' => 'required',
               'woodtype' => 'required',
              // 'prodimension' => 'required',
               'status' => 'required',
               
            ]);

            $catdeatils = new DoorCategoryDetail;
            /// image 1
            if($request->hasFile('image1')){
            $file1 = $request->file('image1');
            $filename1 = time().'.'.$file1->getClientOriginalName();
            $file1->move('website/doortype',$filename1);
            $catdeatils->image1 = $filename1;

        }
             /// image 2
             if($request->hasFile('image2')){
            $file2 = $request->file('image2');
            $filename2 = time().'.'.$file2->getClientOriginalName();
            $file2->move('website/doortype',$filename2);
            $catdeatils->image2 = $filename2;
            
        }
            // image 3
            if($request->hasFile('image3')){
            $file3 = $request->file('image3');
            $filename3 = time().'.'.$file3->getClientOriginalName();
            $file3->move('website/doortype',$filename3);
            $catdeatils->image3 = $filename3;
           
        }   
            // image 4
            if($request->hasFile('image4')){
            $file4 = $request->file('image4');
            $filename4 = time().'.'.$file4->getClientOriginalName();
            $file4->move('website/doortype',$filename4);
            $catdeatils->image4 = $filename4;
           
        }    
            // image 5 
            if($request->hasFile('image5')){
            $file5 = $request->file('image5');
            $filename5 = time().'.'.$file5->getClientOriginalName();
            $file5->move('website/doortype',$filename5);
            $catdeatils->image5 = $filename5;
           
        }
            $catdeatils->category_id = $request->category_id;
            $catdeatils->titletype = $request->title;
            $catdeatils->slug1 = Str::slug($request->title);
            $catdeatils->doorbrand = $request->doorbrand;
            $catdeatils->description = $request->description;
            $catdeatils->doormodel = $request->doormodel;
            $catdeatils->price = $request->price;
            $catdeatils->saleprice = $request->saleprice;
            $catdeatils->paragraph = $request->paragraph;
            $catdeatils->moredetails = $request->moredetails;
            $catdeatils->color = $request->color;
            $catdeatils->woodtype = $request->woodtype;
           // $catdeatils->prodimension = $request->prodimension;
            $catdeatils->status = $request->status;
            $catdeatils->save();
            return redirect()->route('category-details')->with('success','Door Category Details Add Successfulluy');
        }


        public function categorupdate($id){
            $categories = DoorCategory::where('status',1)->get();
            $category = DoorCategoryDetail::find($id);
            return view('admin.doorsection.updatecatdetail', compact('category', 'categories'));
        }

        public function categoryUpdatePost(Request $request,$id){
            $request->validate([
                'image1' =>'image|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
                'image2' =>'image|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
                'image3' =>'image|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
                'image4' =>'image|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
                'image5' =>'image|max:512|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=400,max_width=900,max_height=1300',
                'category_id' => 'required',
                'title' => 'required',
                //'slug' => 'required',
                'required' => 'doorbrand',
                'required' => 'description|max:500',
                'price' => 'required',
                'saleprice' => 'required',
                'moredetails' => 'required',
                'paragraph' => 'required|max:500',
                'color' => 'required',
                'woodtype' => 'required',
               // 'prodimension' => 'required',
                'status' => 'required',
                
             ]);
 
             $catdeatils =  DoorCategoryDetail::find($id);
             /// image 1
             if($request->hasFile('image1')){
             $file1 = $request->file('image1')->getClientOriginalExtension();
             $filename1 = time().'.'.$file1;
             $filepath1 = $request->file('image1')->move(public_path('website/doortype'),$filename1);
             $oldImagePath1 = public_path('website/doortype/' . $catdeatils->image1);
             if (file_exists($oldImagePath1)) {
                 unlink($oldImagePath1);
             }
             $catdeatils->image1 = $filename1;
 
         }
              /// image 2
              if($request->hasFile('image2')){
             $file2 = $request->file('image2')->getClientOriginalExtension();
             $filename2 = time().'.'.$file2;
             $filepath2 = $request->file('image2')->move(public_path('website/doortype'),$filename2);
             $oldImagePath2 = public_path('website/doortype/' . $catdeatils->image2);
             if (file_exists($oldImagePath2)) {
                 unlink($oldImagePath2);
             }
             $catdeatils->image2 = $filename2;
             
         }
             // image 3
             if($request->hasFile('image3')){
             $file3 = $request->file('image3')->getClientOriginalExtension();
             $filename3 = time().'.'.$file3;
             $filepath3 = $request->file('image3')->move(public_path('website/doortype'),$filename3);
             $oldImagePath3 = public_path('website/doortype/' . $catdeatils->image3);
             if (file_exists($oldImagePath3)) {
                 unlink($oldImagePath3);
             }
             $catdeatils->image3 = $filename3;
            
         }   
             // image 4
             if($request->hasFile('image4')){
             $file4 = $request->file('image4')->getClientOriginalExtension();
             $filename4 = time().'.'.$file4;
             $filepath4 = $request->file('image4')->move(public_path('website/doortype'),$filename4);
             $oldImagePath4 = public_path('website/doortype/' . $catdeatils->image4);
             if (file_exists($oldImagePath4)) {
                 unlink($oldImagePath4);
             }
             $catdeatils->image4 = $filename4;
            
         }    
             // image 5 
             if($request->hasFile('image5')){
             $file5 = $request->file('image5')->getClientOriginalExtension();
             $filename5 = time().'.'.$file5;
             $filepath5 = $request->file('image5')->move(public_path('website/doortype'),$filename5);
             $oldImagePath5 = public_path('website/doortype/' . $catdeatils->image5);
             if (file_exists($oldImagePath5)) {
                 unlink($oldImagePath5);
             }
             $catdeatils->image5 = $filename5;
            
         }
             $catdeatils->category_id = $request->category_id;
             $catdeatils->titletype = $request->title;
             $catdeatils->slug1 = Str::slug($request->title);
             $catdeatils->doorbrand = $request->doorbrand;
             $catdeatils->description = $request->description;
             $catdeatils->doormodel = $request->doormodel;
             $catdeatils->price = $request->price;
             $catdeatils->saleprice = $request->saleprice;
             $catdeatils->paragraph = $request->paragraph;
             $catdeatils->moredetails = $request->moredetails;
             $catdeatils->color = $request->color;
             $catdeatils->woodtype = $request->woodtype;
             $catdeatils->prodimension = $request->prodimension;
             $catdeatils->status = $request->status;
             $catdeatils->save();
             return redirect()->route('category-details')->with('success','Door Category Details Update Successfulluy');
         
        }

        public function DoorSizeDetails(){
            $door = DB::table('door_sizes')->select('door_sizes.id','door_sizes.size','door_sizes.status','door_sizes.created_at','door_sizes.updated_at','door_category_details.titletype')->join('door_category_details','door_category_details.id','=' ,'door_sizes.sub_category_id')->get();
            return view('admin.doorsection.doorsizeDetails',compact('door'));
        }
         
        public function DoorSizeAdd(){
            $doorsection = DoorCategoryDetail::get();
            return view('admin.doorsection.addSize', compact('doorsection'));
        }

        public function DoorSizeAddPost(Request $request){
               $request->validate([
                'sub_category_id' => 'required',
                'size' => 'required',
                'status' => 'required',
               ]);

               $doorsize = new DoorSize;
               $doorsize->sub_category_id = $request->sub_category_id;
               $doorsize->size = $request->size;
               $doorsize->status = $request->status;
               $doorsize->save();
               return redirect()->route('door-size')->with('success','Door Size Add Successfully');
        }
}
