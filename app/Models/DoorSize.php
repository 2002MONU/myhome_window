<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoorSize extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_category_id','size','status',
   ];
}
