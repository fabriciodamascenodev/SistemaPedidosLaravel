<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <h1 class="text-4xl font-extrabold text-center text-blue-500 mt-20">
            Tailwind 4.1 Rodando!
        </h1>
    </body>
</html>
