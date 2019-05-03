@extends('layouts.master')
@section('title','Detail for ' . $customer->name)

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Detail For {{$customer->name}}</h5>
                <div class="card-body">
                    <p><strong>Name</strong> : {{$customer->name}} </p>
                    <p><strong>Email</strong> : {{$customer->email}} </p>
                    <p><strong>Company</strong> : {{$customer->company->name}} </p>
                    <a class="btn btn-primary" href="/customers/{{$customer->id}}/edit">Edit Details</a>
                    <!-- delete data -->
                    <form action="/customers/{{$customer->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                    </form>
                    <!-- delete data -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection