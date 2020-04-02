@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
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