
@extends('layouts.main')

@section('page-title')
    Movies Home
@endsection

@section('main-content')

    <h1>Movies</h1>
    <a href="{{route('movies.create')}}" class="btn btn-secondary">Add movie</a>

    <ul class="movies-index">
    @foreach ($movies as $movie)
        <li>
            <img src="{{$movie->poster}}" alt="">
            <h3>{{$movie->title}}</h3>
            <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-secondary">Show</a>
        </li>
    @endforeach
    </ul>
    
@endsection
