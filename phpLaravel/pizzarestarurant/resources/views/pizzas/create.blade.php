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

    <div class="wrapper create-pizza">
        <h1>Order a pizza 🍕</h1>
        <form action="/pizzas" method="POST">
            {{ csrf_field() }}
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name">
            <label for="type">Choose type:</label>
            <select name="type" id="type">
                <option value="hawuaiian">Hawuaiian</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="vulcan">Vulcan</option>
            </select>
            <label for="size">Choose size:</label>
            <select name="size" id="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="big">Big</option>
            </select>
            <fieldset>
                <label>Select Toppings:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="peppers"> Peppers<br />
                <input type="checkbox" name="toppings[]" value="garlic"> Garlic<br />
                <input type="checkbox" name="toppings[]" value="olives"> Olives<br />
            </fieldset>
            <input type="submit" value="Order Pizza :)">
        </form>
    </div>
</div>
@endsection