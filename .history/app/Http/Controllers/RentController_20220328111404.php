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
            $user = DB::table('customers')
            
                 ->where('user_id', '=', Auth::User()->id)
                 ->get();
            
            $newCar = DB::table('cars')
            ->where('car_no', '=', $request->input('car_no'))
            ->get();
            
            
            $newRent = new Rent;
            $newRent->car_no = $request->input('car_no');
            $newRent->scope = $request->input('scope');            

            if($newRent->scope == 'in'){
            $newRent->price =  $newCar->price_within; 
            }else{
            $newRent->price =  $newCar->price_outside; 
            }
            $newRent->start_date = $request->input('start_date');
            $newRent->end_date = $request->input('end_date');
            $newRent->save();
            session()->flash('alert', 'Request was successful');              
            return redirect('/dashbd');
        }
}