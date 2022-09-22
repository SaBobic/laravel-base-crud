@extends('layouts.main')

@section('main-content')

<main>
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <input type="text" placeholder="Titolo" name="title" value="{{ $comic->title }}">
                <input type="text" placeholder="Serie" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Tipo" name="type" value="{{ $comic->type }}">
                <input type="text" placeholder="URL copertina" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Data" name="sale_date" value="{{ $comic->sale_date }}">
                <input type="number" step=".01" placeholder="Prezzo" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-row">
                <textarea rows="5" name="description" placeholder="Aggiungere una descrizione">{{ $comic->description }}"</textarea>
            </div>
            
            <button class="btn btn-primary" type="submit">Aggiorna i dati</button>
        </form>
    </div>
</main>

@endsection