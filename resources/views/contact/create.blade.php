@extends('layouts.app')
@section('title','Contact Us')
@section('content')

<div class="row mt-2">
    <div class="col-12">
        <h1>Contact Us</h1>
        @if(! session()->has('message'))
        <form action="/contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                <div>{{ $errors->first('name') }}</div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <div>{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="message">message</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                <div>{{ $errors->first('message') }}</div>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        @endif
    </div>
</div>

@endsection