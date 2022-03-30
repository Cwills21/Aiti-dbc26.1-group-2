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
}