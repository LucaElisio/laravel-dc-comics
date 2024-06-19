@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea un nuovo Comic</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci copertina</label>
                <input class="form-control" type="file" id="thumb" name="thumb">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
