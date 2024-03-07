@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<article class="card w-25 text-center mx-auto p-4  m-4">
    <h1>
        {{ $restaurant->name_restaurant }}
        </h1>
        <div class="card-image">
            <img class="w-50" src="{{ Storage::url('restaurant->image_restaurant') }}" alt="img">
        </div>
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