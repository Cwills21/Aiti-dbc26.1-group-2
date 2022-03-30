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
    public function savecar(Request $request){
        $request->validate([
     'car_no' => 'required|min:3|max:10|unique:cars,car_no',
     'car_brand' => 'required|min:3|max:50',
     'car_model' => 'required|min:3|max:50', 
     'year_of_reg' => 'required|min:4|max:4',
     'price_within'=> 'required|numeric',
     'price_outside'=> 'required|numeric',
     'dob'=> 'required|date',
     'contact'=> 'required|numeric',
     'programme_id' => 'sometimes|exists:programmes,id',
     'picture'=> 'image',
 ],[
     // custom messages
     'unique' => 'This :attribute is already registered in the system'
 ],[
     // custom attribute names
     'student_id' => 'Student ID',
 ]);
 $path = $request->file('picture')
     ->store('images');
 $newStudent = new Student();
 $newStudent->student_id = $request->input('student_id');
 $newStudent->firstname = $request->input('firstname');
 $newStudent->lastname = $request->input('lastname');
 $newStudent->gender = $request->input('gender');
 $newStudent->date_of_birth = $request->input('dob');
 $newStudent->contact = $request->input('contact');
 $newStudent->programme_id = $request->input('programme_id');
 $newStudent->picture = $path;
 $newStudent->save();
 session()->flash('alert', $newStudent->Fullname. ' Added successfully');
 return redirect('/students');
 
}
}
