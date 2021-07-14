<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
      {{-- <h1> {{ $title }} </h1> --}}

      

      <a href="/padrino "> padrino</a>
      <a href="/ciao "> ciao</a>

      <div class="container">
        <div class="movies">
          @foreach ($movies as $movie)
            <div class="card-movie">
              <p> <strong>Title: </strong> {{ $movie->title }} </p>
              <p> <strong>Original Title: </strong> {{ $movie->original_title }} </p>
              <p> <strong>Nationality: </strong> {{ $movie->nationality }} </p>
              <p> <strong>Date: </strong> {{ $movie->date  }} </p>
              <p><strong>rating: </strong> {{ $movie->vote  }} </p>
            </div>
          @endforeach
        </div>
      </div>


    </body>
</html>
