@extends('layouts.app')

@section('title', 'Admin Dish')

@section('content')

<ul class="list-unstyled row">
@foreach ($dishes as $dish)
    <li class="col-2"> 
        <article class="card  text-center mx-auto ">
            <h1>
                {{ $dish->name }}
            </h1>
            <div class="card-image">
                <img class="img-thumbnail " src="{{ asset('storage') . '/' . $dish->img_dish }}" alt="Dish Image">
            </div>
            <p>
                Prezzo: €{{ $dish->price }}
            </p>
            <p>
                Disponibilità: {{ $dish->available ? 'Si':'No' }}
            </p>

        </article>
    </li>
@endforeach
</ul>

@endsection