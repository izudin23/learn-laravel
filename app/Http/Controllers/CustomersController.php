<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    //

    public function index()
    {
        // call scope in model customer
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        return view(
            'customers.index',
            compact('activeCustomers', 'inactiveCustomers')
        );
    }

    public function store()
    {
        // validate form
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers',
            'status' => 'required'
        ]);

        // Mass assignment is when you send an array to the model creation, basically setting a bunch of fields on the model in a single go
        //use Mass Assignment
        Customer::create($data);

        // insert to table
        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->status = request('status');
        // $customer->save();

        return back();
    }
}
