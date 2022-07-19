@extends('admin.templates.base')

@section('MainContent')
    <div>Titolo: {{$comic->title}}</div>
    <div>Descrizione: {{$comic->description}}</div>
    <div>Immagine: <img src="{{$comic->thumb}}" alt=""></div>
    <div>Prezzo: {{$comic->price}}</div>
    <div>Serie: {{$comic->series}}</div>
    <div>Data sconti: {{$comic->sale_date}}</div>
    <div>Tipo: {{$comic->type}}</div>
@endsection