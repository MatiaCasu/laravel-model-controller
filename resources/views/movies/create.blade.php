@extends('layouts.main')

@section('page-title')
    Add New Movie
@endsection

@section('main-content')
    <div class="create-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('movies.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Aggiungi titolo" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="director">Regista</label>
                <input type="text" class="form-control" name="director" id="director" placeholder="Aggiungi regista" value="{{ old('director') }}">
            </div>
            <div class="form-group">
                <label for="genres">Genere</label>
                <input type="text" class="form-control" name="genres" id="genres" placeholder="Aggiungi genere/i" value="{{ old('genres') }}">
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" class="form-control" name="poster" id="poster" placeholder="Aggiungi locandina" value="{{ old('poster') }}">
            </div>
            <div class="form-group">
                <label for="plot">Trama</label>
                <textarea class="form-control" name="plot" id="plot" placeholder="Aggiungi trama" rows="10">{{ old('plot') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection
