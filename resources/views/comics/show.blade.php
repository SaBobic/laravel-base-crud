@extends('layouts.main')

@section('main-content')

<div class="divider bg-primary">
    <div class="container">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
</div>

<div class="container d-flex">
    <div class="comic-info">
        <h1 class="title">{{ $comic->title }}</h1>
        <div class="price d-flex justify-between">
            <div class="d-flex justify-between">
                <div>U.S. Price: <span>{{ $comic->price }}</span></div>
                <div>AVAILABLE</div>
            </div>
            <div>Check Availability</div>
        </div>
        <p class="description">{!! $comic->description !!}</p>
    </div>
    <aside>
        <div>ADVERTISEMENT</div>
        <img src="{{ asset('/img/adv.jpg') }}" alt="">
    </aside>
</div>

<div>
    <div class="container">
        <h3>Specs</h3>
        <div class="d-flex justify-between mb-5">
            <div class="d-flex">
                <div>Series:</div>
                <div>{{ $comic->series }}</div>
            </div>
            <div class="d-flex">
                <div>U.S. Price:</div>
                <div>{{ $comic->price }}</div>
            </div>
            <div class="d-flex">
                <div>On Sale Date:</div>
                <div>{{ $comic->sale_date }}</div>
            </div>
        </div>
        <a href="/" class="btn btn-primary">Torna alla home</a>
    </div>
</div>

@endsection