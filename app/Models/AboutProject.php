<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'description',
        'satisfied_clients',
        'total_products',
        'years_of_build',
        'total_revenue',
    ];
}
