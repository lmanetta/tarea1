<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        <!-- Styles -->
        <style>
            h1{
                border: 1px solid grayscale;
                font-size: 20px;
            }

            h2{
                font-size: 15px;
            }

            a{
                font-size: 15px;
                padding: 8px;
                color: white;
                background: #239089;
                border-radius: 12px;
                text-decoration:none;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <h1>Calendario Académico</h1>

        <h2>Inicio y finalización de Cursada por Cuatrimestre</h2>

        <a href="{{route('calendario')}}">Calendario</a>

        <h1>Carreras</h1>

        <h2>Oferta académica 2023</h2>

        <a href="{{route('carreras')}}">Carreras</a>
    </body>
</html>
