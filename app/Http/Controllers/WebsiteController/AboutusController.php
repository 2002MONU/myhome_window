<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\AboutProject;
use App\Models\HomeAbout;
class AboutusController extends Controller
{
     // about page 
     public function aboutus(){
       $about = AboutPage::find(1);
       $homeabout = HomeAbout::find(1);
       $aboutproject = AboutProject::find(1);
        return view('website.aboutus', compact('about', 'homeabout','aboutproject'));
      }
}
