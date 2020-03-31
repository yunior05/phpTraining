@extends('layouts.app')

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
        <div class="title m-b-md">
            Pizza List
        </div>
        @foreach($pizzas as $pizza)
            <div>
                {{ $loop->index + 1 }}: {{ $pizza->type }} - ${{ $pizza->price }} - {{ $pizza->name }}
                @if($pizza->price < 10)
                    (It's cheaper)
                @else
                    (It's expensive)
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection