@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.dishes.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h2 class="m-4">Modifica il piatto:</h2>
                <div class="mb-3 input-group">
                    <label for="name" class="input-group-text">Nome del piatto:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $dish['name'] }}" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo:</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" id="price" value="{{ $dish['price'] }}" placeholder="Es. 10.99">
                    <span class="input-group-text">€</span>
                </div>
                
                <div class="mb-3 input-group">
                    <label for="ingredients" class="input-group-text">Ingredienti:</label>
                    <textarea class="form-control"  name="ingredients" id="ingredients" cols="20" rows="5" >{{ $dish['ingredients']  }}</textarea>
                </div>
                
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0" >Disponibile:</legend>
                    <div class="col-sm-10">
                    @if ($dish['available'])
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available" id="available1" value="{{1}}"  checked>
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
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available" id="available1" value="{{1}}"  >
                            <label class="form-check-label" for="available1">
                            Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="available" id="available2" value="{{0}}" checked>
                            <label class="form-check-label" for="available2">
                            No
                            </label>
                        </div>
                    @endif
                    </div>
                </fieldset>
                
                <div class="mb-3 input-group">
                    <input class="form-control" type="file" name="image_restaurant" id="image_restaurant" value="">
                </div>

                <div class="invisible">
                    <label for="id" ></label>
                    <input name="id" value="{{ $dish['id'] }}">
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-primary m-2">
                        Modifica piatto
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