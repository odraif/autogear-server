<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cetegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category'=>'SEDAN',
            'image'=>'car-category1.jpg'
        ]);
        Category::create([
            'category'=>'COUPE',
            'image'=>'car-category2.jpg'
        ]);
        Category::create([
            'category'=>'SPORTS CAR',
            'image'=>'car-category3.jpg'
        ]);
        Category::create([
            'category'=>'STATION WAGON',
            'image'=>'car-category4.jpg'
        ]);
        Category::create([
            'category'=>'HATCHBACK',
            'image'=>'car-category5.jpg'
        ]);
        Category::create([
            'category'=>'CONVERTIBLE',
            'image'=>'car-category6.jpg'
        ]);
        Category::create([
            'category'=>'SUV',
            'image'=>'car-category7.jpg'
        ]);
        Category::create([
            'category'=>'MINIVAN',
            'image'=>'car-category8.jpg'
        ]);
    }
}
