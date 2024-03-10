@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="m-4">Crea il piatto:</h2>
                <div class="mb-3 input-group">
                    <label for="name" class="input-group-text">Nome:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo:</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" id="price" required>
                    <span class="input-group-text">€</span>

                </div>
                
                <div class="mb-3 input-group">
                    <label for="ingredients" class="input-group-text">Ingredienti:</label>
                    <textarea class="form-control"  name="ingredients" id="ingredients" cols="20" rows="5" required>{{ old('ingredients')  }}</textarea>
                </div>
                
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Disponibile:</legend>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" id="available1" value="{{1}}" required>
                        <label class="form-check-label" for="available1">
                        Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" id="available2" value="{{0}}">
                        <label class="form-check-label" for="available2">
                        No
                        </label>
                    </div>
                    </div>
                </fieldset>
                
                <div class="mb-3 input-group">
                    <input class="form-control" type="file" name="img_dish" id="img_dish" value="">
                </div>
                <div class="invisible">
                    <label for="restaurant_id" ></label>
                    <input name="restaurant_id" value="{{ $restaurant['id'] }}">
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2">
                        Aggiungi piatto
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