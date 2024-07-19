<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'favicon','logo','footerabout','address', 'email','contact' ,'title','facebook' ,'vimeo','twitter','instagram',
     ];
}
