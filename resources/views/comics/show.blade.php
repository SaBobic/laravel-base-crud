@extends('layouts.main')

@section('main-content')

<div class="divider bg-primary">
    <div class="container">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
</div>

<div class="container d-flex">
    <div class="comic-info">
        <h1 class="title">{{ $comic['title'] }}</h1>
        <div class="price d-flex justify-between">
            <div class="d-flex justify-between">
                <div>U.S. Price: <span>{{ $comic['price'] }}</span></div>
                <div>AVAILABLE</div>
            </div>
            <div>Check Availability</div>
        </div>
        <p class="description">{!! $comic['description'] !!}</p>
    </div>
    <aside>
        <div>ADVERTISEMENT</div>
        <img src="{{ asset('/img/adv.jpg') }}" alt="">
    </aside>
</div>

<div>
    <div class="container d-flex justify-between">
        <div>
            <h3>Talent</h3>
            <div class="d-flex">
                <div>Art by:</div>
                <div>
                    @foreach ($comic['artists'] as $artist)
                        @if ($loop->last)
                            <a href="#">{{ "$artist" }}</a>
                            @break
                        @endif
                        <a href="#">{{ "$artist" }}</a>, 
                    @endforeach
                </div>
            </div>
            <div class="d-flex">
                <div>Written by:</div>
                <div>
                    @foreach ($comic['writers'] as $writer)
                        @if ($loop->last)
                            <a href="#">{{ "$writer" }}</a>
                            @break
                        @endif
                        <a href="#">{{ "$writer" }}</a>, 
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <h3>Specs</h3>
            <div class="d-flex">
                <div>Series:</div>
                <div>{{ $comic['series'] }}</div>
            </div>
            <div class="d-flex">
                <div>U.S. Price:</div>
                <div>{{ $comic['price'] }}</div>
            </div>
            <div class="d-flex">
                <div>On Sale Date:</div>
                <div>{{ $comic['sale_date'] }}</div>
            </div>
        </div>
    </div>
</div>

@endsection