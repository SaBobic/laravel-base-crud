@php
$comics = config('comics');   
@endphp

@extends('layouts.main')

@section('main-content')
    <!-- Series section -->
    <section class="series-list">
        <div class="container">
            <div class="label bg-primary">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <figure>
                            {{-- <a href="{{ route('comics.show', ['id' => $loop->index]) }}"> --}}
                            <a href="#">
                                <div>
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </div>
                                <figcaption>{{ $comic['series'] }}</figcaption>
                            </a>
                        </figure>
                    </div>
                    @endforeach
                </div>
            <button>LOAD MORE</button>
        </div>
    </section>
    <!-- Tabs section -->
    <section id="tabs" class="bg-primary">
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
@endsection