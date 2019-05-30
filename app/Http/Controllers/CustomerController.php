<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        //$customers['customers'] = Customer::all();

       return view('customers.index',compact('activeCustomers','inactiveCustomers'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('customers.create',compact('companies'));
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

       return redirect('index');
    }
}
