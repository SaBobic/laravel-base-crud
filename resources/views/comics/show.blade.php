@extends('layouts.main')

@section('main-content')
<main id="comic-info">
    <div class="divider bg-primary">
        <div class="thumb comic-container">
            <div>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <div class="label top">{{ $comic->type }}</div>
                <div class="label bottom">view gallery</div>
            </div>
        </div>
    </div>

    <div class="comic-container comic-overview">
        <h1 class="title">{{ $comic->title }}</h1>
        <div class="availability d-flex justify-between">
            <div class="d-flex justify-between">
                <div class="label">U.S. Price: <span class="price">{{ $comic->price }}</span></div>
                <div class="status">AVAILABLE</div>
            </div>
            <div class="check">Check Availability</div>
        </div>
        <p class="description mb-5">{!! $comic->description !!}</p>

        <h2>Specs</h2>
        <ul>
            <li>Series: {{ $comic->series }}</li>
            <li>U.S. Price: {{ $comic->price }}</li>
            <li>On Sale Date: {{ $comic->sale_date }}</li>
        </ul>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">BACK TO COMICS</a>
        <a class="btn btn-success" href="{{ route('comics.edit', $comic->id) }}">EDIT COMIC</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" data-delete="{{ $comic->title }}">DELETE COMIC</button>
        </form>
    </div>
</main>
@endsection

@section('extra-js')
    <script src="{{ asset('js/confirmDelete.js') }}"></script>
@endsection