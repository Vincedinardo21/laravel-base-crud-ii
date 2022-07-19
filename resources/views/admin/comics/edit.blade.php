@extends('admin.templates.base')

@section('MainContent')
    <h1>Insert new comic</h1>

    <form action="{{route('comics.update', ['comic' => $comic])}}" method="post">
        @method('put')
        @csrf
        <div><input type="text" name="title" placeholder="Inserisci titolo"></div>
        <div><input type="text" name="description" placeholder="Inserisci descrizione"></div>
        <div><input type="text" name="thumb" placeholder="Inserisci img"></div>
        <div><input type="text" name="price" placeholder="Inserisci prezzo"></div>
        <div><input type="text" name="series" placeholder="Inserisci serie"></div>
        <div><input type="text" name="sale_date" placeholder="Inserisci data sconto"></div>
        <div><input type="text" name="type" placeholder="Inserisci tipo"></div>
        <div><button>Save</button></div>
    </form>
@endsection