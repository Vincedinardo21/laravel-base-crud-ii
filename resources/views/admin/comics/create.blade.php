@extends('admin.templates.base')

@section('MainContent')
    <h1>Insert new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <!-- Sono il form -->
        <input type="text" name="title" placeholder="Inserisci titolo">
        <input type="text" name="description" placeholder="Inserisci descrizione">
        <button>Save</button>
    </form>
@endsection