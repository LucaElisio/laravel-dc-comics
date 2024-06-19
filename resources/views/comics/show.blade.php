@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli di: {{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h3>Descrizione</h3>
        <p>{{$comic->description}}</p>
    </div>
@endsection
