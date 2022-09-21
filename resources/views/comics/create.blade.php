@extends('layouts.main')

@section('main-content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <input type="text" placeholder="Titolo" name="title">
            <input type="text" placeholder="Descrizione" name="description">
            <input type="text" placeholder="URL copertina" name="thumb">
            <input type="number" step=".01" placeholder="Prezzo" name="price">
            <input type="text" placeholder="Serie" name="series">
            <input type="text" placeholder="Data" name="sale_date">
            <input type="text" placeholder="Tipo" name="type">

            <button type="submit">Invia</button>
        </form>
    </div>
@endsection