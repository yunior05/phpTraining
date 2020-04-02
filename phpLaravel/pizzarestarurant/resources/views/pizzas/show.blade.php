@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="wrapper pizza-item">
        <h1>Order for {{ $pizza->name }}</h1>
        <hr>
        <p>PRICE: ${{ $pizza->price }}</p>
        <p>TYPE: {{ $pizza->type }}</p>
        <p>SIZE: {{ $pizza->size }}</p>
        <p>TOPPINGS:</p>
        @if($pizza->toppings)
            <ul>
                @foreach($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>
                @endforeach
            </ul>
        @endif
        <div>
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="post">
        @csrf
        @method('DELETE')
            <button class="pizza_button" type="submit">Complete Order</button>
        </form>
    </div>
    <div>
        <a href="{{ route('pizzas.index') }}">
           << Back to all pizza orders
        </a>
    </div>
    </div>
</div>
@endsection