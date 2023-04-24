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
                text-decoration:none;
            }
        
        </style>
    </head>
    <body class="antialiased">
    
        <h1>Carreras</h1>

        <?php
            $logistica = 'Tecnicatura Superior en Logística';
            $higiene = 'Tecnicatura Superior en Higiene y Seguridad en el Trabajo';
            $mantenimiento = 'Tecnicatura Superior en Mantenimiento Industrial';
            $admRRHH = 'Tecnicatura Superior en Administración de Recursos Humanos';
            $anSist = 'Tecnicatura Superior en Análisis de Sistemas';
        ?>
        
        <ul>
            <li><a href="{{route('carrera', $logistica)}}">Tecnicatura Superior en Logística</a></li>
            <li> <a href="{{route('carrera', $higiene)}}">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</a></li>
            <li> <a href="{{route('carrera',$mantenimiento)}}">Tecnicatura Superior en Mantenimiento Industrial</a></li>
            <li> <a href="{{route('carrera',$admRRHH)}}">Tecnicatura Superior en Administración de Recursos Humanos</a></li>
            <li> <a href="{{route('carrera',$anSist)}}">Tecnicatura Superior en Análisis de Sistemas</a></li>
        </ul>
    </body>
</html>
