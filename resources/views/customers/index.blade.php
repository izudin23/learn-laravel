@extends('layouts.app')
@section('title','Customer List')
@section('content')

<div class="row mt-2">
    <div class="col-md-2">
        <a href="{{route('customers.create')}}" class="btn btn-primary">Add Customer</a>
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
                    <td>
                        <a href="{{route('customers.show',['customer'=>$customer]) }}">{{$customer->name}}</a>
                    </td>
                    <td>{{$customer->company->name}}</td>
                    <td>{{$customer->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection