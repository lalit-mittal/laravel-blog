@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Customer List</h2>
            <p><a href="create" class="btn btn-primary ">Add New Customers</a> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Active Customer</h3>
            <ul>
                @foreach($activeCustomers as $activeCustomer)
                    <li>{{  $activeCustomer->name }}<span class="text-muted">({{ $activeCustomer->company->name }})</span></li>

                @endforeach
            </ul>
        </div>

        <div class="col-6">
            <h3>Inactive Customer</h3>
            <ul>
                @foreach($inactiveCustomers as $inactiveCustomer)
                    <li>{{  $inactiveCustomer->name }}<span class="text-muted">({{ $inactiveCustomer->company->name }})</span></li>

                @endforeach
            </ul>
        </div>
    </div>


@endsection

