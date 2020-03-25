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

    <div class="wrapper pizza-item">
        <h1>Order for {{ $pizza->name }}</h1>
        <hr>
        <p>PRICE: ${{ $pizza->price }}</p>
        <p>TYPE: {{ $pizza->type }}</p>
        <p>SIZE: {{ $pizza->size }}</p>
        <p>TOPPINGS:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection