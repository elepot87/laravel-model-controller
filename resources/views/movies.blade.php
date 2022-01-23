@extends('layouts.main')

@section('head-title', 'Archive | Movies' )

@section('main-content')
    <h1 class="title-page">Pagina di archivio dei film </h1>

    <div class="card-film">
        @foreach ($films as $film)
            <h3>{{$film}}</h3>
        @endforeach
        
    </div>
@endsection