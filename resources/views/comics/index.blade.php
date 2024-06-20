@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <a href="{{route('comics.create')}}" class="btn btn-secondary mb-4">Aggiungi</a>
        <div class="row">
            @foreach ($comicsArray as $comic)
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h6 class="card-title">{{$comic->price}}</h6>
                        <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Dettagli</a>

                        {{-- Cancellazione elemento --}}
                        <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
