<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class RentController extends Controller
{
    public function showRentCarPage($id){
        $car = Car::findOrFail($id);       
        return view('cars.cars-form')
         ->with('edit', true)
         ->with('car', $car);
    }
}