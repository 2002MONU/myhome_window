<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoLink;
class VideosController extends Controller
{
    public function videos(){
        $video = VideoLink::get();
        return view('website.videos', compact('video'));
    }
}
