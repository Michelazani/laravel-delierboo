@extends('layouts.app')

@section('title', 'Admin Dish')

@section('content')
<div class="container">
    @if($dishes->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            Non c'è nessun piatto disponibile.
        </div>
        <div class="text-center">
            <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary">Crea nuovo piatto</a>
        </div>
    @else
        <ul class="list-unstyled row">
            @foreach ($dishes as $dish)
                <li class="col-sm-6 col-md-3 d-flex justify-content-center p-3">
                    <article class="card text-center mx-auto p-3 w-100 clickable-card" data-href="{{ route('admin.dishes.show', $dish->id) }}">
                        <div class="card-content">
                            <h1>{{ $dish->name }}</h1>
                            <div class="card-image">
                                <img class="img-fluid mb-3 mt-3" style="height: 15rem; object-fit:contain" src="{{ asset('storage') . '/' . $dish->img_dish }}" alt="Dish Image">
                            </div>
                            <p>Prezzo: €{{ $dish->price }}</p>
                            <p>Disponibilità: {{ $dish->available ? 'Si' : 'No' }}</p>
                        </div>
                        <!-- Gruppo Pulsanti -->
                        <div class="btn-group" role="group" aria-label="Basic example" style="gap: .5rem;">
                            <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning" style="width: 100px;">
                                <i class="fas fa-pencil-alt"></i> Modifica
                            </a>
                            <button form="delete-form-{{ $dish->id }}" class="btn btn-danger" style="width: 100px;" onclick="event.stopPropagation(); return confirm('Sei sicuro di voler eliminare questo piatto?')">
                                <i class="fas fa-trash"></i> Elimina
                            </button>
                            <form id="delete-form-{{ $dish->id }}" action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
    @endif
</div>

<script>
    document.querySelectorAll('.clickable-card').forEach(card => {
        card.addEventListener('click', () => {
            window.location.href = card.getAttribute('data-href');
        });
    });
</script>
@endsection
