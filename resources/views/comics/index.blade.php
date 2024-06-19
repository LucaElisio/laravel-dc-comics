@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <div class="row">
            @foreach ($comicsArray as $comic)
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h6 class="card-title">{{$comic->price}}</h6>
                        <p class="card-text">{{$comic->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
