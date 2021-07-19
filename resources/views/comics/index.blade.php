@extends('layouts.main')

@section('main-content')
    <h2>Elenco Fumetti</h2>
    
    <table class="table my-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Serie</th>
                <th colspan="3" class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                    </td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $comics->links() }}
@endsection

@section('title', 'Comics')