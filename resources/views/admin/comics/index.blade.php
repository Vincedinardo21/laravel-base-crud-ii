@extends('admin.templates.base')

@section('MainContent')
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>THUMB</th>
                    <th>PRICE</th>
                    <th>SERIES</th>
                    <th>SALE DATE</th>
                    <th>TYPE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td> 
                        <td>
                            <button><a href="#">View</a></button>
                            <button><a href="#">Edit</a></button>
                            <button><a href="#">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </main>
@endsection