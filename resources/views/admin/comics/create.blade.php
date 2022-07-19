@extends('admin.templates.base')

@section('MainContent')
    <h1>Insert new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <!-- Sono il form -->
        <input type="text" name="title" placeholder="Inserisci titolo">
        <input type="text" name="description" placeholder="Inserisci descrizione">
        <input type="text" name="thumb" placeholder="Inserisci img">
        <input type="text" name="price" placeholder="Inserisci prezzo">
        <input type="text" name="series" placeholder="Inserisci serie">
        <input type="text" name="sale_date" placeholder="Inserisci data sconto">
        <input type="text" name="type" placeholder="Inserisci tipo">
        <button>Save</button>
    </form>
@endsection