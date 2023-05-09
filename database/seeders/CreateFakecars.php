<?php

namespace Database\Seeders;

use App\Models\Brands;
use App\Models\Cars;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CreateFakecars extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $Brands = Brands::all()->pluck('id')->toArray();
        $category = Category::all()->pluck('id')->toArray();
        $image = Category::all()->pluck('image')->toArray();
        $count=30;

        for ($i = 0; $i < $count; $i++) {
            $brand_id = $faker->randomElement($Brands);
            $category_id = $faker->randomElement($category);
            $image_name = $faker->randomElement($image);

            Cars::create([
                'Brand'=> $brand_id,
                "Category"=> $category_id,
                "Model"=> $faker->name(),
                "horespower"=> $faker->randomNumber(3),
                "engine"=> $faker->name(),
                "Drivetrain"=> $faker->name(),
                "Consumption"=> $faker->randomNumber(2),
                "weight"=> $faker->randomNumber(4),
                "speed"=> $faker->randomNumber(3),
                "pricefornew"=> $faker->randomNumber(6),
                "priceforused"=> $faker->randomNumber(6),
                "Year"=> $faker->randomNumber(4),
                "images"=>$image_name
            ]);
        }
    }
}
