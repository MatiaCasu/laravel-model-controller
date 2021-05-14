<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul>
            @foreach ($movies as $movie)
            <li>{{$movie->title}}</li>
            <li>{{$movie->director}}</li>
            <li>{{$movie->plot}}</li>
            @endforeach
        </ul>
    </div>
    
</body>
</html>