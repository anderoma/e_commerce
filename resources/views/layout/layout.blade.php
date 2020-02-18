<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title> 

    <!-- Bootsrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

 
    <!-- Personalized -->
    <link href="/css/e_commerce.css" rel="stylesheet">
  </head>
  <body>
    <header>

      @component('layout.components.navbar')
      @endcomponent

    </header>
    <div id="app">
      @include('layout.flash-message')

      @yield('content')
    </div>

    @component('layout.components.footer')
    @endcomponent

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>
