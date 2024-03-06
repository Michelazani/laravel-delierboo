@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.restaurants.store') }}" method="POST">
                @csrf

                <h2 class="m-4">Crea il menù del ristorante:</h2>
                <div class="mb-3 input-group">
                    <label for="name_restaurant" class="input-group-text">Nome del ristorante:</label>
                    <input class="form-control" type="text" name="name_restaurant" id="name_restaurant" value="{{ old('name_restaurant') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="address_restaurant" class="input-group-text">Indirizzo:</label>
                    <input class="form-control" type="text" name="address_restaurant" id="address_restaurant" value="{{ old('address_restaurant') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="vat_restaurant" class="input-group-text">P.IVA:</label>
                    <input class="form-control" type="text" name="vat_restaurant" id="vat_restaurant" value="{{ old('vat_restaurant') }}">
                </div>
                {{-- aggiungo tipologia e form per mettere le immagini --}}
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2">
                        Crea ristorante
                    </button>
                    <button type="reset" class="btn btn-warning m-2">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection