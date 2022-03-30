<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class RentController extends Controller
{
    public function showRentCarPage($id){
        $car = Car::findOrFail($id);       
        return view('rents.rent-form')       
         ->with('cars', $car);
    }
}