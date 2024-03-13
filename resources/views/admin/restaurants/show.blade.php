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
    <p class="mt-3">
        Email: {{ Auth::user()->email}}
    </p>
    <p>
        Type: 
        {{-- mettere il tipo --}}
        @foreach ($types as $type )
            {{ $type-> name_type}} 
            @if ( $types[count($types) -1]->name_type == $type->name_type)
            .
            @else
            ,
            @endif 
        @endforeach
    </p> 
    <p class="">
        Indirizzo: {{ $restaurant->address_restaurant }}
    </p>  
    </div>
</article>
@endsection















