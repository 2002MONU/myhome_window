<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\VideoLink;
use Illuminate\Http\Request;

class VideoPageController extends Controller
{
    public function videoDetails(){
        $video = VideoLink::paginate(8);
        return view('admin.videopage.video-details',compact('video'));
    }

    public function addVideo(){
        return view('admin.videopage.addvideo');
    }

    public function addVideoPost(Request $request){
           $request->validate([
            'link' => 'required',
            'status' => 'required',
           ]);
        $videolink = new VideoLink;
        $videolink->link = $request->link;   
        $videolink->status = $request->status;   
        $videolink->save();
        return redirect()->route('video-details')->with('success','Video Link Add Successfully');
    }

    public function updateVideo($id){
          $video = VideoLink::find($id);
           return view('admin.videopage.updatevideo',compact('video'));
    }

    public function updateVideoPost(Request $request,$id){
        $request->validate([
            'link' => 'required',
            'status' => 'required',
           ]);
        $videolink =  VideoLink::find($id);
        $videolink->link = $request->link;   
        $videolink->status = $request->status;   
        $videolink->save();
        return redirect()->route('video-details')->with('success','Video Link Update Successfully');
    }
}
