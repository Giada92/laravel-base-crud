@extends('layouts.main')

@section('main-content')
    <h1>Modifica il Fumetto: '{{ $comic->title }}'</h1>

    <form method="POST" action="{{ route('comics.update', $comic->id) }}" class="mt-5">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Titolo del fumetto</label>
          <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title" value="{{ $comic->title }}">
        </div>
        <div class="form-group">
            <label for="description">Inserisci la trama del fumetto</label>
            <textarea class="form-control" id="description" rows="5" name="description" placeholder="Descrizione della trama">{{ $comic->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Url dell'immagine</label>
            <input type="text" class="form-control" id="thumb" placeholder="Url dell'immagine" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Prezzo del fumetto" name="price" value="{{ $comic->price }}">
        </div>
        <div class="form-group">
            <label for="series">Serie del fumetto</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci la serie del fumetto" name="series" value="{{ $comic->series }}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data di vendita" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo di fumetto</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci la tipologia del fumetto" name="type" value="{{ $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection