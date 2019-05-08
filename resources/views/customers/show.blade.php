@extends('layouts.app')
@section('title','Detail for ' . $customer->name)

@section('content')

<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Detail For {{$customer->name}}</h5>
            <div class="card-body">
                <p><strong>Name</strong> : {{$customer->name}} </p>
                <p><strong>Email</strong> : {{$customer->email}} </p>
                <p><strong>Company</strong> : {{$customer->company->name}} </p>
                <a class="btn btn-primary" href="{{route('customers.edit',['customer'=>$customer]) }}">Edit Details</a>
                <!-- delete data -->
                <form action="{{route('customers.destroy',['customer'=>$customer]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                </form>
                <!-- delete data -->

                @if($customer->image)
                <div class="row mt-3">
                    <div class="col-md-12">
                        <img src="{{ asset('storage/'.$customer->image) }}" alt="" class="img-thumbnail">
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection