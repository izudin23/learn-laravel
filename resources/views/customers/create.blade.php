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
                    <form action="/customers" method="POST">
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
                            <label for="status">Status</label>
                            <select class="custom-select" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="company_id">Company</label>
                            <select class="custom-select" name="company_id">
                                @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection