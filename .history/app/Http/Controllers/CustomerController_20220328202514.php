<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showAddCustomerPage(){
    return view('customers.customer-form')
    ->with('customer', new Customer)
    ->with('edit', false);
    }

    public function showAllCustomers(Request $request) {
        $searchTerm = $request->query('search');
         if($searchTerm == null){
             $allCustomers = Customer::paginate(10);
         } else {
              $allCustomers = Customer::where('name','like', "%{$searchTerm}%");
              //->orWhere('Customer_id','like', "%{$searchTerm}%")->paginate(10);
         }
        return view('customers.list')
            ->with('customers', $allCustomers);
        }
    
    public function updateCustomer(Request $request){
        $customer = Customer::findOrFail( $request->input('id'));
        $customer->name = $request->input('name');
        $customer->contact = $request->input('contact');
        $customer->address = $request->input('address');
        $customer->save();
        session()->flash('alert', $customer->name. ' updated successfully');
        return redirect('/customers');
    }
    
    
    public function showEditCustomerPage($id)
    {
        $customer = Customer::findOrFail($id);       
        return view('customers.customer-form')
         ->with('edit', true)
         ->with('customer', $customer);
    }
    
    
    public function saveCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'contact' => 'required|string|unique:customers,contact',
            'address' => 'required'
        ],[
                // custom messages
                'unique' => 'This :attribute is already registered in the system'
            ]);
        
        
    
            $newCustomer = new Customer;
            $newCustomer->user_id = $request->input('user_id');
            $newCustomer->customer_name = $request->input('name');
            $newCustomer->contact = $request->input('contact');
            $newCustomer->res_address = $request->input('address');
            $newCustomer->save();
            session()->flash('alert', 'Hello ' . $newCustomer->name. ' your profile has been added successfully');
            return redirect('/dashbd');
        }
    
        public function deleteCustomer(Request $request){
            $customer = Customer::findOrFail( $request->input('id'));
            $customer->delete();
            session()->flash('alert', $customer->name. ' deleted successfully');
            return redirect('/customers');
        }
}