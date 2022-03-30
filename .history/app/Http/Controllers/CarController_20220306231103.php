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

    public function showAddCarPage(){
        $allProgrammes = Cars::all();
        return view('students.student-form')
        ->with('programmes', $allProgrammes)
         ->with('student', new Student)
         ->with('edit', false);
    }
}
