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
      @include('partials.header')
      {{-- //header --}}

      {{-- main --}}
      @yield('content')
      {{-- //main --}}

      {{-- footer --}}
      <footer>

      </footer>
      {{-- //footer --}}
    </body>
</html>
