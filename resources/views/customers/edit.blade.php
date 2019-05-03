@extends('layouts.master')
@section('title','Edit details ' . $customer->name)
@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header">
                    Edit Details for {{$customer->name}}
                </div>
                <div class="card-body">
                    <form action="/customers/{{$customer->id}}" method="POST">
                        @method('PATCH')
                        @include('customers.form')
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection