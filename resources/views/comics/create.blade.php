@extends('layouts.main')

@section('page-title', 'Crea un nuovo Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crea un nuovo Comic</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
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
                        <td>Tipo</td>
                        <td><input type="text" class="form-control" name="type"></td>
                    </tr>
                    <tr>
                        <td>Descrizione</td>
                        <td><textarea class="form-control" name="description"></textarea></td>
                    </tr>
                    <!-- Aggiungi altri campi se necessario -->
                </tbody>
            </table>
            <button type="button" class="btn btn-primary">Salva</button>
        </div>
    </div>
</div>
@endsection