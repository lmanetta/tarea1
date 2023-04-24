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
        
        <h1>Calendario Académico</h1>

        <ul>
            <li>Taller Curso Inicial 1° año: 13/03 al 23/03 (Primer día 19h a 21:45h, resto de los días de 18:45h a 21:45h)</li>
            <li>Inicio Primer Cuatrimestre: 27/03</li>
            <li>Finalización Primer Cuatrimestre: 14/07</li>
            <li>Receso Invernal: 17/07 al 28/07</li>
            <li>Inicio Segundo Cuatrimestre: 14/08</li>
            <li>Finalización Segundo Cuatrimestre: 24/11</li>
            <li>Acto Finalización de Trayectoria Académica: 20/12</li>
        </ul>
    </body>
</html>
