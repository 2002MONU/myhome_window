<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorCategoryDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','image1','image2','image3', 'image4','image5' ,'titletype','slug1' ,'doorbrand','description','doormodel','price','saleprice','paragraph','moredetails','color','woodtype','prodimension','status',
     ];
}
