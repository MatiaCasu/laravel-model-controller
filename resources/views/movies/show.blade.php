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

    </div>
    
</body>
</html>