<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap CSS -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
         <main id="app"></main>       
         @vite('resources/js/app.js')
         <script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>
    </body>
</html>
