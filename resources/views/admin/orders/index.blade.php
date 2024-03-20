@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<div class="container ">
    <h1 style>
        Ordini
    </h1>
        <div class="row d-flex justify-content-between ">

            @foreach ($orders as $order)
            <article class="card my_card  p-3 ">
                
                <p>
                    Data: {{$order->date_and_time}}
                </p>
                
                <p>
                    Nome: {{ $order->customer_name }}
                </p>
            {{-- <p>
                Price: {{ $dish->type}}
            </p> --}}
            <p>
                Cognome: {{ $order->customer_surname }}
            </p>
            <p>
                Indirizzo: {{ $order->customer_addres }}
            </p>
            <p>
                Email: {{ $order->customer_email }}
            </p>
            <p>
                Telefono: {{ $order->customer_phone }}
            </p>
            <p>
                Totale: {{ $order->total_price }}
            </p>
            
        </article>
        @endforeach
        </div>
    </div>
@endsection