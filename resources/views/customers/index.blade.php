@extends('layouts.master')
@section('title','Customer')
@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header">
                    Added Customers
                </div>
                <div class="card-body">
                    <form action="customers" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            {{ $errors->first('name') }}
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                            {{ $errors->first('email') }}
                        </div>
                        <div class="form-group">
                            <label for="active">Status</label>
                            <select class="custom-select" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header bg-success text-white">Active Customer</h5>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($activeCustomers as $activeCustomer)
                                <li class="list-group-item">{{$activeCustomer->name}}<small class="text-muted">({{$activeCustomer->email}})</small></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header bg-danger text-white">Inactive Customer</h5>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($inactiveCustomers as $inactiveCustomer)
                                <li class="list-group-item">{{$inactiveCustomer->name}}<small class="text-muted">({{$inactiveCustomer->email}})</small></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection