@extends('layouts.main')

@section('page-title', 'Crea un nuovo Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crea un nuovo Comic</h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
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
                            <td><input type="text" class="form-control" name="title"></td>
                        </tr>
                        <tr>
                            <td>Descrizione</td>
                            <td><textarea class="form-control" name="description"></textarea></td>
                        </tr>
                        <tr>
                            <td>Immagine</td>
                            <td><input type="text" class="form-control" name="thumb"></td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td><input type="text" class="form-control" name="type"></td>
                        </tr>
                        <tr>
                            <td>Scrittori</td>
                            <td><textarea class="form-control" name="writers"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection
