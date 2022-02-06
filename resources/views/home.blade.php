<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Best Movies</title>
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
  <header>
    <h1>Best Movies</h1>
  </header>
  <main>
    <ul>
    @foreach ($movies as $movie)
      <li>
        <span><strong>Titolo:</strong> {{$movie['title']}}</span>
        <span><strong>Titolo originale:</strong> {{$movie['original_title']}}</span>
        <span><strong>Nazionalità:</strong> {{$movie['nationality']}}</span>
        <span><strong>Data di uscita:</strong> {{$movie['date']}}</span>
        <span><strong>Rating:</strong> {{$movie['vote']}}</span>
      </li>
    @endforeach
    </ul>
  </main>
</body>
</html>