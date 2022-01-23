@extends('layouts.main')

@section('head-title', 'Archive | Movies' )

@section('main-content')
<div class="container">
    <h1 class="title-page">
        Pagina di archivio dei film
    </h1>
    @foreach ($movies as $movie)
    <div class="card my-card" style="width: 18rem;">
            <div class="card-body">      
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <div>Data di uscita: {{$movie->date}}</div>
                    <div>Voto: {{$movie->vote}}</div>
            </div>
        </div> 
    @endforeach
</div>  
@endsection