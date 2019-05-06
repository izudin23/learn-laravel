<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
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
        $customer = new Customer();

        return view('customers.create', compact('companies', 'customer'));
    }

    public function store()
    {
        // Mass assignment is when you send an array to the model creation, basically setting a bunch of fields on the model in a single go
        //use Mass Assignment
        Customer::create($this->validateRequest());

        return redirect('customers')->with('message', 'Customers Has Added');
    }

    public function show(Customer $customer)
    {
        // fetch Data 
        // 1) $customer = Customer::where('id', $customer)->firstOrFail();
        // 2) Add model Customer =>(Customer $customer) <=Route Model Binding 
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id)->with('message', 'Details has Edited');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers')->with('message', 'Customer Has Deleted');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'company_id' => 'required',
        ]);
    }
}
