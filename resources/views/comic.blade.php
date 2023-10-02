@extends('layouts.public')
@section('content')
    <div class="comic-blue"></div>
    <div class="comic-wrapper">
        <div class="info">
            <h2> {{ $comic->title }} </h2>
            <div class="green-container">
                <div class="price">
                    <div>U.S. Price: <span class="prezzo"> ${{ $comic->price }}</span></div>
                    <div>AVAILABLE</div>
                </div>
                <div class="check">
                    <span>Check Availability <span style="font-size: small">&#9660;</span></span>
                </div>
            </div>
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
