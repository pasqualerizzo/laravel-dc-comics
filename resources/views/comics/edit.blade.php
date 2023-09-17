@extends('layouts.main')

@section('page-title', 'Modifica Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Modifica Comic</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna Indietro</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Campo</th>
                            <th scope="col">Valore</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Titolo</td>
                            <td><input type="text" class="form-control" name="title" value="{{ $comic->title }}"></td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td><input type="text" class="form-control" name="type" value="{{ $comic->type }}"></td>
                        </tr>
                        <tr>
                            <td>Descrizione</td>
                            <td><textarea class="form-control" name="description">{{ $comic->description }}</textarea></td>
                        </tr>
                        <!-- Aggiungi altri campi se necessario -->
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection
