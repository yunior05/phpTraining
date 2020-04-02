@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        @foreach($pizzas as $pizza)
            <div>
                <a href="{{ route('pizzas.show', $pizza->id) }}">
                {{ $loop->index + 1 }}: {{ $pizza->type }} - ${{ $pizza->price }} - {{ $pizza->name }}
                @if($pizza->price < 10)
                    (It's cheaper)
                @else
                    (It's expensive)
                @endif
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection