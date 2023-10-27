@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4">
                <div class="card my-3">
                    <img src="https://picsum.photos/200/300?random={{$movie->id}}" class="card-img-top" alt="Immagine del Film">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p class="card-text">Titolo Originale: {{ $movie['original_title'] }}</p>
                        <p class="card-text">Voto: {{ $movie['vote'] }}</p>
                        <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                        <p class="card-text">Data di uscita: {{ $movie['date'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

