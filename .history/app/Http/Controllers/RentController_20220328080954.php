<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rent;
class RentController extends Controller
{
    public function showRentCarPage($id){
        $car = Car::findOrFail($id);       
        return view('rents.rent-form')       
         ->with('car', $car);
    }

    public function saveRent(Request $request)
    {
       
    
            $newRent = new Rent;
            $newRent->user_id = $request->input('user_id');
            $newRent->customer_name = $request->input('name');
            $newRent->contact = $request->input('contact');
            $newRent->res_address = $request->input('address');
            $newRent->save();
            session()->flash('alert', $newRent->name. ' created successfully');
            // $data = $request->all();
            // unset($data['_token']);
            // Customer::create($data);
    
            return redirect('/customers');
        }
}