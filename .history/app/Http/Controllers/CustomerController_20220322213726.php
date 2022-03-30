<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showAddCustomerPage(){
    return view('customers.customer-form')
    ->with('edit', false);
    }
}