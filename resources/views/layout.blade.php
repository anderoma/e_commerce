<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title> 

    <!-- Bootsrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link href="/css/e_commerce.css" rel="stylesheet">
  </head>
  <body>
    <header>

      @component('components.navbar')
      @endcomponent

    </header>

    @yield ('content')

    @component('components.footer')
    @endcomponent
    
  </body>
</html>
