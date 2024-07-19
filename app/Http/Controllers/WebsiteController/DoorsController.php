<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\DoorCategoryDetail;
use App\Models\DoorCategory;
use App\Models\DoorSize;
use App\Models\FooterDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoorsController extends Controller
{
    public function doors()
    {
        $catdeatils = DoorCategoryDetail::paginate(8);
        return view('website.doors', compact('catdeatils'));
    }

    public function singledoors($slug)
    {
        $category = DB::table('door_categories')
            ->select('door_categories.id', 'door_category_details.slug1', 'door_category_details.id', 'door_categories.slug', 'door_categories.title', 'door_category_details.image1', 'door_category_details.titletype', 'door_category_details.status')
            ->join('door_category_details', 'door_categories.id', '=', 'door_category_details.category_id')
            ->where('door_categories.slug', $slug)->where('door_category_details.status',1)
            ->paginate(8);
        $cat = DB::table('door_categories')
            ->select('door_categories.id', 'door_category_details.id', 'door_categories.slug', 'door_categories.title', 'door_category_details.image1', 'door_category_details.status')
            ->join('door_category_details', 'door_categories.id', '=', 'door_category_details.category_id')
            ->where('door_categories.slug', $slug)->limit(1)
            ->first();
        // $category = DoorCategory::where('slug',$slug)->first();
        return view('website.singledoor', compact('category', 'cat'));
    }

    public function doorCategory($slug1)
    {
        
        $categorydet = DoorCategoryDetail::where('status',1)->where('door_category_details.slug1', $slug1)->first();

        $cate = DoorCategory::get();
// return $categorydet->id;
        $category = DoorCategoryDetail::where('category_id', $categorydet->category_id)
            ->where('id', '!=', $categorydet->id)
            ->get();
        // return $category;
        $doorsection = DoorSize::where('sub_category_id',$categorydet->id)->where('id', '!=', $categorydet->id)
        ->get();
        return view('website.door-categorydetails', compact('categorydet', 'doorsection', 'category'));
    }
}
