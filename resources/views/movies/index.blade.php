<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul class="movies-index">
        @foreach ($movies as $movie)
            <li>
                <img src="{{$movie->poster}}" alt="">
                <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-secondary">Show</a>
            </li>
        @endforeach
        </ul>
    </div>
    
</body>
</html>