<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function showAllCars() {
        $allCars = Cars::paginate(10);
        return view('cars.list')
                ->with('cars', $allCars);
    }
}
