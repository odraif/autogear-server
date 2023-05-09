<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class Brandscontroller extends Controller
{
    public function store(Request $request){

        $imageName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move(public_path('cars-logos/'), $imageName);

        $brand = new Brands;
        $brand->name = $request->input('name');
        $brand->logo =  $imageName;
        $brand->save();

        return response()->json([
            'status'=> 201,
            'msg'=>'added succesfully',
        ]);
    }
    public function index(){
        
        return Brands::all();
    }
}
