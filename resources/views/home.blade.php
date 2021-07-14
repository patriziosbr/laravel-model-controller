<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      {{-- <h1> {{ $title }} </h1> --}}

      <div class="container">
        <div class="movies">
          @foreach ($movies as $movie)
            <h2> {{ $movie->title }} </h2>
            
          @endforeach
        </div>
      </div>


    </body>
</html>
