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
     'picture'=> 'image',
     
 ],[
     // custom messages
     'unique' => 'This :attribute is already registered in the system'
 ],[
     // custom attribute names
     'car_no' => 'Car munber',
 ]);
 $path = $request->file('picture')
     ->store('images');
 $newCar = new Car();
 $newCar->car_no = $request->input('car_no');
 $newCar->car_brand = $request->input('car_brand');
 $newCar->lastname = $request->input('lastname');
 $newCar->gender = $request->input('gender');
 $newCar->date_of_birth = $request->input('dob');
 $newCar->contact = $request->input('contact');
 $newCar->picture = $path;
 $newCar->save();
 session()->flash('alert', $newCar->Carname. ' Added successfully');
 return redirect('/cars');
 
}
}
