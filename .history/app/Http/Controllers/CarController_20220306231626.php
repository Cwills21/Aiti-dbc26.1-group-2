<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function showAllCars() {
        $allCars = Car::paginate(10);
        return view('cars.list')
                ->with('cars', $allCars);
    }

    public function showAddCarPage(){
       return view('cars.cars-form')
         ->with('car', new Car)
         ->with('edit', false);
    }
}
