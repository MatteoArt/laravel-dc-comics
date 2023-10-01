@extends('layouts.public')
@section('content')
    <div class="comic-blue"></div>
    <div class="comic-wrapper">
        <div class="info">
            <h2> {{ $comic->title }} </h2>
            <p>
                {{ $comic->description }}
            </p>
        </div>
        <div class="picture">
            <div class="adv">advertisement</div>
            <div class="picture-container">
                <img src="{{ asset('images/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
@endsection