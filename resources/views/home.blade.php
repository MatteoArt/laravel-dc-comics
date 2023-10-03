@extends('layouts.public')

@section('content')
    <div id="current-series">
        <span class="btn-big">current series</span>
    </div>
    <main>
        <div class="card-container">
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="img-container">
                        <div class="overlay">
                            <span> ${{ $comic->price }} </span>
                            <span> {{ $comic->type }} </span>
                        </div>
                        <img alt="comic-cover" src="{{ $comic->path }}">
                    </div>
                    <div class="desc"> 
                        <a class="title-link" href="{{ route('comic', $comic->id) }}">{{ $comic->series }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row-btn">
            <a class="btn" href="{{ route('comic.create') }}">aggiungi comic</a>
        </div>
    </main>
    @include('partials.blueBar')
@endsection
