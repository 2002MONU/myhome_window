<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Illuminate\Http\Request;
use App\Models\Homebanner;
use App\Models\HomeService;
use App\Models\BlogSection;
use App\Models\DoorCategory;
use Illuminate\Support\Facades\DB;
use App\Models\DoorCategoryDetail;
use App\Models\AboutPage;
use App\Models\FooterDetail;
use App\Models\HomeFeature;
use App\Models\Testimonial;

class HomeController extends Controller
{ 
     // index page 
      public function index(){
        $homebanner = Homebanner::where('status',1)->orderBy('created_at', 'desc')
        ->take(3)->get();
        $homeabout = HomeAbout::find(1);
        $about = AboutPage::find(1);
        $testino = Testimonial::where('status',1)->get();
        // $homeservices = HomeService::where('status', 1)->get();
        $catdetails = DoorCategoryDetail::where('status',1)->get();
        $blogdetails = BlogSection::where('status',1)->orderBy('created_at', 'desc')->get();
        $category = DB::table('door_categories')
    ->select(
        'door_categories.id',
        'door_categories.slug',
        'door_categories.status as category_status',
        'door_category_details.image1',
        'door_category_details.status as detail_status'
    )
    ->join('door_category_details', 'door_categories.id', '=', 'door_category_details.category_id')
    ->where('door_categories.status', 1)
    ->get();

    $footer = FooterDetail::find(1);
    $features = HomeFeature::where('status',1)->get();
         return view('website.index',compact('homebanner','testino' ,'about','homeabout','blogdetails','category', 'catdetails' , 'footer', 'features'));
      }
 
     



}
