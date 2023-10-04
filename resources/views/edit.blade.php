@extends('layouts.public')

@section('content')
    <div id="update">
        <a class="indietro" style="margin: 20px 30px;" href="{{ route('home') }}">Home</a>
        <h1 style="text-align: center;padding-top:15px">Modifica comic</h1>
        <form action="{{ route('comic.update', $comic->id) }}" method="POST" class="form-insert">
            @csrf

            @method('PUT')

            <div class="form-group">
                <label for="titolo_id">Titolo: </label>
                <input type="text" id="titolo_id" name="title" value="{{ $comic->title }}">
            </div>

            <div class="form-group">
                <label for="description_id">Descrizione: </label>
                <textarea id="description_id" name="description">
                {{ $comic->description }}
            </textarea>
            </div>
            <div class="form-group">
                <label for="img_id">Immagine: </label>
                <input type="text" id="img_id" name="path" value="{{ $comic->path }}">
                <label for="price_id" class="label-form">Prezzo: </label>
                <input type="text" id="price_id" name="price" value="{{ $comic->price }}">
            </div>

            <div class="form-group">
                <label for="series_id">Serie: </label>
                <input type="text" id="series_id" name="series" value="{{ $comic->series }}">
                <label for="sale_id" class="label-form">Sale date: </label>
                <input type="text" id="sale_id" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="form-group">
                <label for="type_id">Tipo: </label>
                <input type="text" id="type_id" name="type" value="{{ $comic->type }}">
            </div>



            <div class="form-group">
                <label for="artists_id">Artisti: </label>
                <textarea id="artists_id" name="artists">
                {{ implode(', ', json_decode($comic->artists)) }}              
            </textarea>
                <label for="writers_id" class="label-form" id="last-label">Scrittori: </label>
                <textarea id="writers_id" name="writers">
                {{ implode(', ', json_decode($comic->writers)) }}
            </textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Salva">
            </div>


        </form>
    </div>
@endsection
