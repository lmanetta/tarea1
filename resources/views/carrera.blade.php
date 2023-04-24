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
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>{{$carrera}}</h1>
    </body>
</html>
