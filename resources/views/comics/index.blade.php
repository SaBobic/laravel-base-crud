@extends('layouts.main')

@section('main-content')
<main id="comics">
    <!-- Series section -->
    <section class="comics-list">
        <div class="container">
            <div class="label bg-primary">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <figure>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <div>
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                </div>
                                <figcaption>{{ $comic->series }}</figcaption>
                            </a>
                            <a class="btn btn-success" href="{{ route('comics.edit', $comic->id) }}">EDIT COMIC</a>
                            <form class="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST" data-delete="{{ $comic->title }}">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button btn btn-danger" type="submit">DELETE COMIC</button>
                            </form>
                        </figure>
                    </div>
                    @endforeach
                </div>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">ADD COMIC</a>
        </div>
    </section>
    <!-- Tabs section -->
    <section class="tabs bg-primary">
        <div class="row container">
            <div class="col">
                <figure>
                    <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="item.text">
                    <figcaption>DIGITAL COMICS</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure>
                    <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="item.text">
                    <figcaption>DC MERCHANDISE</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure>
                    <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="item.text">
                    <figcaption>SUBSCRIPTION</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure>
                    <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="item.text">
                    <figcaption>COMIC SHOP LOCATOR</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure>
                    <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="item.text">
                    <figcaption>DC POWER VISA</figcaption>
                </figure>
            </div>
        </div>
    </section>
</main>
@endsection

@section('extra-js')
    <script src="{{ asset('js/confirmDelete.js') }}"></script>
@endsection