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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection