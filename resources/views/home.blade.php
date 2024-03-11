@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="jumbotron"></div>
        <div class="main-box">
            <div class="container">
                <div id="current-series" class="blue-spacing">CURRENT SERIES</div>
                <div class="cards-container">
                    <div class="cards-row">
                        @foreach(config('comics') as $comic)
                        <div class="cards-col">
                            <div class="comic-card">
                                <figure>
                                    <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                                </figure>
                                <h4>{{ $comic['title']}}</h4>
                            </div>    
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="box-button">
                    <button class="blue-spacing">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection 