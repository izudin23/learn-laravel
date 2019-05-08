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
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Staus</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1; ?>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$number}}</td>
                    <td>
                        <a href="{{route('customers.show',['customer'=>$customer]) }}">{{$customer->name}}</a>
                    </td>
                    <td>{{$customer->company->name}}</td>
                    <td>{{$customer->status}}</td>
                </tr>
                <?php $number++; ?>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-12 text-center d-flex justify-content-center">
                {{ $customers->links() }}
            </div>
        </div>
    </div>
</div>

@endsection