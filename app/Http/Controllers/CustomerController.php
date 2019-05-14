<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function customerlist()
    {
        $customers = Customer::all();

       return view('internals/customers',$customers);
    }
}
