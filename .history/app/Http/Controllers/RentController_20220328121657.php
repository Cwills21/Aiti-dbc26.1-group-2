<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rent;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
class RentController extends Controller
{
    public function showRentCarPage($id){
        $car = Car::findOrFail($id);       
        return view('rents.rent-form')       
         ->with('car', $car);
    }

    public function saveRent(Request $request)
    {
            $Customer = DB::table('customers')            
                 ->where('id', '=', Auth::user()->user_id)
                 ->get();
            $Customer_id = $Customer->user_id;
            
            $newCar = DB::table('cars')
            ->where('id', '=', $request->input('car_id'))
            ->get();            
            $Price_within =  $newCar->price_within;                 
            $Price_outside =  $newCar->price_outside; 
            
            $newRent = new Rent;
            $newRent->customer_id = $Customer_id;
            $newRent->car_id = $request->input('car_id');           
            $newRent->scope = $request->input('scope'); 
            if($newRent->scope == 'in'){
            $newRent->price =  $Price_within; 
            }else{
            $newRent->price =  $Price_outside; 
            }
            $newRent->start_date = $request->input('start_date');
            $newRent->end_date = $request->input('end_date');
            $newRent->save();
            session()->flash('alert', 'Request was successful');              
            return redirect('/dashbd');
        }
}