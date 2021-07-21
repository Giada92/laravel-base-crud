@extends('layouts.main')

@section('main-content')
    <h2>{{ $comic->title }}</h2>
    <a class="btn btn-secondary" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
    <div class="row my-5">
        <div class="col-3">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-9">
          <p class="text-justify">{{ $comic->description }}</p>
          <p class="font-weight-bold">{{ $comic->price }} &euro;</p>
          <p>{{ $comic->series }} | {{ $comic->type }} | {{ $comic->sale_date }}</p>
        </div>
      </div>
    <a class="btn btn-primary" href="{{ route('comics.index') }}">TORNA ALLA LISTA</a>
@endsection

@section('title', $comic->title)