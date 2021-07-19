@extends('layouts.main')

@section('main-content')
    <h2>Elenco Fumetti</h2>
    
    <table class="table my-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Serie</th>
                <th colspan="3" class="text-center">Active</th>
            </tr>
        </thead>
        @foreach ($comics as $comic)
            <tbody>
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>SHOW</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
            </tbody>
        @endforeach
    </table>
    {{ $comics->links() }}
@endsection