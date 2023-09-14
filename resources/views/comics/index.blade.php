@extends('layouts.main')

@section('page-title', 'Index di Pasta')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Comics</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped border border-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Writers</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid" style="max-width: 150px;">
                            </td>
                            <td class="text-center">{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->writers }}</td>
                            <td>
                                <button type="button" class="btn btn-primary">
                                    Visualizza
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
