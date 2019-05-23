<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function customerlist()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        //$customers['customers'] = Customer::all();

       return view('internals/customers',compact('activeCustomers','inactiveCustomers','companies'));
    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'active'=>'required',
            'company_id'=>'required'
        ]);

        Customer::create($data);

       return back();
    }
}
