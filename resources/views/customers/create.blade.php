@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Add New Customer</h2>
        </div>
    </div>
    <div class="row">
        <div class="row-12">
            <form action="customer/store" method="post" >

                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>


                <div class="form-group">
                    <label for="Comapny">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="Status">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select Customer Status</option>
                        <option value="1" >Active</option>
                        <option value="0" >Inactive</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>
@endsection

