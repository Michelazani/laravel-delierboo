@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<div class="container ">
    <h1 style>
        Ordini
    </h1>
        <div class="row d-flex justify-content-between ">

            @foreach ($orders as $order)
            <article class="card my_card text-center p-5 ">
                
                <p>
                    {{$order->date_and_time}}
                </p>
                
                <p>
                    {{ $order->customer_name }}
                </p>
            {{-- <p>
                Price: {{ $dish->type}}
            </p> --}}
            <p>
                {{ $order->customer_surname }}
            </p>
            <p>
                {{ $order->customer_addres }}
            </p>
            <p>
                {{ $order->customer_email }}
            </p>
            <p>
                {{ $order->customer_phone }}
            </p>
            <p>
                {{ $order->total_price }}
            </p>
            
        </article>
        @endforeach
        </div>
    </div>
@endsection