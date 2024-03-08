@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<article class="card  col-sm-10 col-lg-4 text-center mx-auto p-4  m-4">
    <h1>
        {{ $restaurant->name_restaurant }}
    </h1>
    <div class="card-image mt-3">
        <img class="img-fluid rounded" src="{{ asset('storage') . '/' . $restaurant->image_restaurant }}" alt="Restaurant Image">
    </div>

    {{-- @if ( str_starts_with($restaurant->image_restaurant, 'http'))
            <img src="{{ $restaurant->image_restaurant }}" alt="">
        @else
            <img src="{{ asset('storage') . '/' . $restaurant->restaurant_image }}" alt="">
        @endif --}}

    <p class="mt-3">
        Email: {{ Auth::user()->email}}
    </p>
    <p>
        {{-- mettere il tipo --}}
        Type: {{ $restaurant-> name_type}}
    </p> 
    <p class="">
        Indirizzo: {{ $restaurant->address_restaurant }}
    </p>  
    </div>
</article>
@endsection















