@extends('layouts.app')
@section('title','Create customer')
@section('content')
<div class="row">
    <div class="col">
        <div class="card mt-3">
            <div class="card-header">
                Added Customers
            </div>
            <div class="card-body">
                <form action="/customers" method="POST">
                    @include('customers.form')
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection