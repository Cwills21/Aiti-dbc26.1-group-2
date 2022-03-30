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

    public function showEditCarPage($id){
        $car = Car::findOrFail($id);       
        return view('cars.cars-form')
         ->with('edit', true)
         ->with('car', $car);
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
 $newCar->car_model = $request->input('car_model');
 $newCar->year_of_reg = $request->input('year_of_reg');
 $newCar->price_within = $request->input('price_within');
 $newCar->price_outside = $request->input('price_outside');
 $newCar->picture = $path;
 $newCar->save();
 session()->flash('alert', $newCar->Carname. ' Added successfully');
 return redirect('/cars');
 
}
public function updateCar(Request $request){
    $path = $request->file('picture')
     ->store('images');        
    $car = Car::findOrFail( $request->input('id'));
    $car->car_no = $request->input('car_no');
    $car->car_brand = $request->input('car_brand');
    $car->car_model = $request->input('car_model');
    $car->year_of_reg = $request->input('year_of_reg');
    $car->price_within = $request->input('price_within');
    $car->price_outside = $request->input('price_outside');
    $car->picture = $path;
    $car->save();
    session()->flash('alert', $car->Carname. ' updated successfully');
    return redirect('/cars');
}
}
