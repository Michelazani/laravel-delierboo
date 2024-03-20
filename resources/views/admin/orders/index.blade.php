@extends('layouts.app')

@section('title', 'Admin Restaurant')

@section('content')
<h1>
    Ordini
</h1>
<ul class="">
    @foreach ($orders as $order)
    <li>
        <article class="card w-25 text-center mx-auto p-4  m-4">
        
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
        
            </div>
        </article>
    </li>
    @endforeach
</ul>
@endsection