<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    //

    public function index()
    {
        $activeCustomers = Customer::where('status', '1')->get();
        $inactiveCustomers = Customer::where('status', '0')->get();
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
        // insert to table
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->status = request('status');
        $customer->save();

        return back();
    }
}
