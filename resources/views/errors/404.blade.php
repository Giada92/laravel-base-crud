@extends('layouts.main')

@section('main-content')
    <div class="container text-center">
        {{-- <h2>{{ $exception->getMessage() }}</h2> --}}
        <h2>Not Found!</h2>
        <p>Oops, qualcosa è andato storto!</p>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Continua la tua ricerca</a>
    </div>
@endsection