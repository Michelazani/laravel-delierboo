@extends('layouts.app')

@section('title', 'Admin Dish')

@section('content')

<div class="container">
    <ul class="list-unstyled row">
    @foreach ($dishes as $dish)
        <li class="col-sm-6 col-md-3 d-flex justify-content-center p-3"> 
            <article class="card  text-center mx-auto p-3 w-100" >
                <div class="h-50 d-flex justify-content-center align-items-center">
                    <h1 class="">
                        {{ $dish->name }}
                    </h1>
                </div>
                <div class="card-image">
                    <img class="img-fluid mb-3 mt-3" style="height: 15rem; object-fit:contain " src="{{ asset('storage') . '/' . $dish->img_dish }}" alt="Dish Image">
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
</div>

@endsection

