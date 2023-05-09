<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $filltables =[
        'Brand',
        "Category",
        "Model",
        "horespower",
        "engine",
        "Drivetrain",
        "Consumption",
        "weight",
        "speed",
        "pricefornew",
        "priceforused",
        "Year",
        "images"
    ];
}
