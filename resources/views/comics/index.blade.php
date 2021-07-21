@extends('layouts.main')

@section('main-content')
    <h2>Elenco Fumetti</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
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
                    <td>
                        <a class="btn btn-secondary" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                    </td>
                    <td>
                        <form 
                            method="POST" 
                            action="{{ route('comics.destroy', $comic->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" id="prova" value="DELETE"
                            onClick='confirmSubmit()'>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $comics->links() }}
@endsection

@section('title', 'Comics')