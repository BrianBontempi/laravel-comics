@extends('layouts.main')

@section('title', $comic['title'])

@section('main-content')
<section id="comic-detail">
    <div class="blue-band">
        <div class="container">
            <figure class="comic-thumb">
                <span class="thumb-label">{{ $comic['type'] }}</span>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <span class="thumb-gallery">VIEW GALLERY</span>
            </figure>
        </div>
    </div>

    <div class="container comic-info">
        <div class="comic-text">
            <h1>{{ $comic['title'] }}</h1>
            <div class="price-bar">
                <div class="price">
                    <span class="label">U.S. Price:</span> <strong>{{ $comic['price'] }}</strong>
                </div>
                <div class="availability">AVAILABLE</div>
                <div class="check">Check Availability &#9662;</div>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="comic-adv">
            <span>ADVERTISEMENT</span>
            <img src="{{ asset('images/adv.jpg') }}" alt="Advertisement">
        </div>
    </div>

    <div class="comic-specs">
        <div class="container">
            <div class="specs-col">
                <h3>Talent</h3>
                <div class="specs-row">
                    <div class="specs-label">Art by:</div>
                    <div class="specs-value">
                        @foreach ($comic['artists'] as $artist)
                        <a href="#">{{ $artist }}</a>@if (!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
                <div class="specs-row">
                    <div class="specs-label">Written by:</div>
                    <div class="specs-value">
                        @foreach ($comic['writers'] as $writer)
                        <a href="#">{{ $writer }}</a>@if (!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs-col">
                <h3>Specs</h3>
                <div class="specs-row">
                    <div class="specs-label">Series:</div>
                    <div class="specs-value"><a href="#">{{ strtoupper($comic['series']) }}</a></div>
                </div>
                <div class="specs-row">
                    <div class="specs-label">U.S. Price:</div>
                    <div class="specs-value">{{ $comic['price'] }}</div>
                </div>
                <div class="specs-row">
                    <div class="specs-label">On Sale Date:</div>
                    <div class="specs-value">{{ date('M d Y', strtotime($comic['sale_date'])) }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <a href="{{ route('home') }}">&larr; Torna ai fumetti</a>
    </div>
</section>
@endsection
