<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CarsController extends Controller
{
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->file('images')->getClientOriginalExtension();
        $request->file('images')->move(public_path('cars/'), $imageName);

        $car = new Cars;
        $car->brand = $request->input('brand');
        $car->category = $request->input('category');
        $car->horespower = $request->input('horespower');
        $car->Model = $request->input('model');
        $car->engine = $request->input('engine');
        $car->Drivetrain = $request->input('Drivetrain');
        $car->consumption = $request->input('consumption');
        $car->weight = $request->input('weight');
        $car->speed = $request->input('speed');
        $car->pricefornew = $request->input('pricefornew');
        $car->priceforused = $request->input('priceforused');
        $car->year = $request->input('year');
        $car->images = $imageName;
        $car->save();
        Log::channel('autogear_log')->info("Car added succesfully");

        return response()->json([
            'status' => 201,
            'msg' => 'Car added succesfully!',
        ]);
    }

    public function index()
    {
        $cars = DB::table('cars')
            ->join('brands', 'cars.brand', '=', 'brands.id')
            ->join('cars_categories', 'cars.Category', '=', 'cars_categories.id')
            ->select('cars.*', 'brands.name', 'cars_categories.category')
            ->get();
        return $cars;
    }

    public function show($id)
    {
        $car = DB::table('cars')
            ->where('cars.id', $id)
            ->join('brands', 'cars.brand', '=', 'brands.id')
            ->join('cars_categories', 'cars.Category', '=', 'cars_categories.id')
            ->select('cars.*', 'brands.name', 'cars_categories.category')
            ->get();
        return $car;
    }

    public function edit(Request $request, $id)
    {

        $brand = $request->input('brand');
        $category = $request->input('category');
        $horespower = $request->input('horespower');
        $Model = $request->input('model');
        $engine = $request->input('engine');
        $Drivetrain = $request->input('Drivetrain');
        $consumption = $request->input('consumption');
        $weight = $request->input('weight');
        $speed = $request->input('speed');
        $pricefornew = $request->input('pricefornew');
        $priceforused = $request->input('priceforused');
        $year = $request->input('year');

        DB::update('update cars set Brand = ? ,
            Category = ? ,
            horespower = ? ,
            Model = ? ,
            engine = ? ,
            Drivetrain = ? ,
            consumption = ? ,
            weight = ? ,
            speed = ? ,
            pricefornew = ? ,
            priceforused = ? ,
            year = ?
            where id = ?', [
            $brand,
            $category,
            $horespower,
            $Model,
            $engine,
            $Drivetrain,
            $consumption,
            $weight,
            $speed,
            $pricefornew,
            $priceforused,
            $year,
            $id
        ]);
        Log::channel('autogear_log')->info("Car who has id ".$id." updated succesfully");
        return response()->json([
            'status' => 201,
            'msg' => 'Car updated succesfully!',
        ]);
    }
    public function destroy($id)
    {

        $res = Cars::find($id)->delete();
        if ($res) {
            $data = [
                'status' => '1',
                'msg' => 'success'
            ];
            Log::channel('autogear_log')->info("Car who has id ".$id." delete succesfully");
        } else {
            $data = [
                'status' => '0',
                'msg' => 'fail'
            ];
            Log::channel('autogear_log')->info("Some thing went wrong");
        }
        return response()->json($data);
    }
}
