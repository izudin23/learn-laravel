<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //

    public function index()
    {
        $customers = Customer::all();
        // call scope in model customer
        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();
        return view(
            'customers.index',
            compact('customers')
        );
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create', compact('companies'));
    }

    public function store()
    {
        // validate form
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers',
            'status' => 'required',
            'company_id' => 'required'
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

        return redirect('customers');
    }
}
