
@extends('layouts.main')

@section('page-title')
    {{$movie->title}}
@endsection

@section('main-content')

    <h1>Movies</h1>
    <ul class="movie-show">
        <li><img src="{{$movie->poster}}" alt=""></li>
        <li>{{$movie->title}}</li>
        <li>{{$movie->director}}</li>
        <li>{{$movie->genres}}</li>
    </ul>
    <div class="plot">
        <p>{{$movie->plot}}</p>
    </div>
    <div class="home">
        <a href="{{route('movies.index')}}" class="btn btn-secondary">Home</a>
    </div>

@endsection
