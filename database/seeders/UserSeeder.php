<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Users::create([
            "firstname" =>$faker->firstName(),
            "lastname"=>$faker->lastName(),
            "email"=>"admin@test.com",
            "password"=>"admin",
            "isadmin"=>"1"
    ]);
        for($i=0 ;$i < 10;$i++){
            Users::create([
                    "firstname" =>$faker->firstName(),
                    "lastname"=>$faker->lastName(),
                    "email"=>$faker->email(),
                    "password"=>$faker->password(),
                    "isadmin"=>"0"
            ]);
        }
    }
}
