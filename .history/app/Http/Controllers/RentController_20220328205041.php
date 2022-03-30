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
        $Customer = DB::table('customers')            
                 ->where('user_id', '=', Auth::user()->id)
                 ->first();
        if(!$Customer){
            return view('customers.customer-form')
            ->with('customer', new Customer)
            ->with('edit', false);
        }else{
        $car = Car::findOrFail($id);       
        return view('rents.rent-form')       
         ->with('car', $car);
        }
    }

    public function saveRent(Request $request)
    {
            $Customer = DB::table('customers')            
                 ->where('user_id', '=', Auth::user()->id)
                 ->first();
            $Customer_id = $Customer->id;
            
            $newCar = DB::table('cars')
            ->where('id', '=', $request->input('car_id'))
            ->first();            
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
            $newRent->approval_status = 'Pending';
            $newRent->save();
            session()->flash('alert', 'Request was successful');              
            return redirect('/dashbd');  // remember to change this redirection to a form
        }

        public function showPendingRent(){
            $Pending_rent = DB::table('rents')
            ->join('cars', 'rents.car_id', '=', 'cars.id')
            ->join('customers', 'rents.customer_id', '=', 'customers.id')
            ->where('rents.approval_status', '=', 'Pending')
            ->get();              
            return view('rents.pending')       
           ->with('Rents', $Pending_rent);          
        }

        public function appreoveRent($id){            
        $rent = Rent::findOrFail($id);   
        $rent->approval_status = 'Approved';
        $rent->save();    
        return view('rent.customer-form')
        session()->flash('alert', 'Transaction Approved successfully');
        return view('rents.pending')       
           ->with('Rents', $Pending_rent);  
    }



    public function deleteCustomer(Request $request){
        $customer = Customer::findOrFail( $request->input('id'));
        $customer->delete();
        session()->flash('alert', $customer->name. ' deleted successfully');
        return redirect('/customers');
    }
}