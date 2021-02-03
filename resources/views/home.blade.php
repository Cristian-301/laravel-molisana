<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelMolisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        
    </head>
    <body>

      {{-- header --}}
      <header>
        <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La molisana">
        <ul class="list-inline">
          <li class="active"><a href="">HOME</a></li>
          <li><a href="">PRODOTTI</a></li>
          <li><a href="">NEWS</a></li>
        </ul>
      </header>
      {{-- //header --}}

      {{-- main --}}
      <main>
        
      </main>
      {{-- //main --}}

      {{-- footer --}}
      <footer>

      </footer>
      {{-- //footer --}}
    </body>
</html>
