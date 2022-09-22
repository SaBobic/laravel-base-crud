@extends('layouts.main')

@section('main-content')

<main>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="form-row">
                <input type="text" placeholder="Titolo" name="title">
                <input type="text" placeholder="Serie" name="series">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Tipo" name="type">
                <input type="text" placeholder="URL copertina" name="thumb">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Data" name="sale_date">
                <input type="number" step=".01" placeholder="Prezzo" name="price">
            </div>
            <div class="form-row">
                <textarea rows="5" name="description" placeholder="Aggiungere una descrizione"></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</main>

@endsection