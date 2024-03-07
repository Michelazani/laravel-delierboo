@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<article class="card w-25 text-center mx-auto p-4  m-4">
    <h1>
        {{ $restaurant->name_restaurant }}
        </h1>
        <div class="card-image">
            <img src="{{ asset('storage') . '/' . $restaurant->image_restaurant }}" alt="Restaurant Image">
        </div>

        {{-- @if ( str_starts_with($restaurant->image_restaurant, 'http'))
        <img src="{{ $restaurant->image_restaurant }}" alt="">
        @else
            <img src="{{ asset('storage') . '/' . $restaurant->restaurant_image }}" alt="">
        @endif --}}

        <p>
            Email:{{ Auth::user()->email}}
        </p>
        {{-- <p>
            Price: {{ $restaurant-> type}}
        </p> --}}
        <p>
            Indirizzo: {{ $restaurant->address_restaurant }}
        </p>  
    </div>
</article>
@endsection