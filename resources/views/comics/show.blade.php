@extends('layouts.main')

@section('page-title', 'Dettagli Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Dettagli Comic</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna Indietro</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">Tipo: {{ $comic->type }}</p>
                    <p class="card-text">Descrizione: {{ $comic->description }}</p>
                    <!-- Aggiungi altri campi se necessario -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
