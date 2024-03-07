@extends('layouts.app')

@section('title', 'Creating a new post')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-7">
            @include('layouts.partials.errors')
            <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="m-4">Crea il ristorante:</h2>
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
                {{-- checkbox per il type --}}
                <h4>Scegli il tipo di ristorante:</h4>
                <div class="mb-3 form-check ">
                    @foreach ($types as $type)
                    <input class="form-check-input" type="checkbox" name="some_checkbox" id="some_checkbox" {{ old('some_checkbox') ? 'checked' : '' }}>
                    <label class="form-check-label" for="some_checkbox">
                        <option value="{{ $type }}"
                            {{ $type == old('type', $type->type) ? 'selected' : '' }}>
                                {{ $type->name_type }}
                        </option>
                        @endforeach
                    </label>
                </div>
                <div class="invisible">
                    <label for="user_id" ></label>
                    <input name="user_id" value="{{ Auth::id() }}">
                </div>

                
                {{--form per mettere le immagini --}}
                <div class="mb-3 input-group">
                    <input class="form-control" type="file" name="image_restaurant" id="image_restaurant" value="">
                </div>

                {{-- preview img --}}
                <div class="mb-3 input-group">
                    <img src="" alt="Image preview" class="d-none img-fluid" id="image-preview">
                </div> 
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