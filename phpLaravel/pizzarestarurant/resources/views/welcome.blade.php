@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        @if (session('mssg'))
            {{ session('mssg') }}!
        @endif 
        <br>
        <img class="image-circle" src="img/pizza-logo.jpeg" alt="Pizza Restaurant Logo">
        <div class="title m-b-md">
            Pizza Restaurant
        </div>

        <div class="links">
            <a href="pizzas/create">Order Pizza!</a>
        </div>
    </div>
</div>
@endsection