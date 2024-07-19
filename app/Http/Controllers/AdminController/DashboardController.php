<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\BlogSection;
use App\Models\ContactForm;
use App\Models\DoorCategory;
use App\Models\DoorCategoryDetail;
use Illuminate\Http\Request;
use App\Models\Homebanner;
use App\Models\Testimonial;
use App\Models\FooterDetail;
class DashboardController extends Controller
{
    public function dashboard(){
        if (auth()->guard('admin'))
       {
        $banner = Homebanner::where('status',1)->count('id');
        $blog = BlogSection::where('status',1)->count('id');
        $testi  = Testimonial::where('status',1)->count('id');
        $doorcate  = DoorCategory::where('status',1)->count('id');
        $doordetails  = DoorCategoryDetail::where('status',1)->count('id');
        $enquiry  = ContactForm::count('id');
        $footer = FooterDetail::find(1);
        return view('admin.dashboard', compact('banner', 'blog','testi', 'doorcate', 'doordetails','enquiry' ,'footer'));
    }
    return redirect('admin/login')->with('error', 'Opps! You do not have access');
    }
}
