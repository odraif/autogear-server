<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brands::create(
            [
                "name"       =>    "Range Rover",
                "logo" =>    "1676917524.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Tesla",
                "logo" =>    "1676917661.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "BMW",
                "logo" =>    "1676918600.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Honda",
                "logo" =>    "1676920445.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Dacia",
                "logo" =>    "1677084378.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Volvo",
                "logo" =>    "1677084506.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Opel",
                "logo" =>    "1677084558.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Fiat",
                "logo" =>    "1677084581.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Nissan",
                "logo" =>    "1677084613.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Toyota",
                "logo" =>    "1677084638.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Jeep",
                "logo" =>    "1677084683.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Ford",
                "logo" =>    "1677084711.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Kia",
                "logo" =>    "1677084740.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Lexus",
                "logo" =>    "1677084775.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Alfa romeo",
                "logo" =>    "1677084806.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Audi",
                "logo" =>    "1677084832.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Peuguot",
                "logo" =>    "1677084915.png"
            ]
        );
        Brands::create(
            [
                "name"       =>    "Cetreon",
                "logo" =>    "1677084943.png"
            ]
        );
    }
}
