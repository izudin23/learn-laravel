@extends('layouts.master')
@section('title','Customer List')
@section('content')
<div class="container pb-5">
    <div class="row mt-2">
        <div class="col-md-2">
            <a href="/customers/create" class="btn btn-primary">Add Customer</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Staus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->company->name}}</td>
                        <td>{{$customer->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection