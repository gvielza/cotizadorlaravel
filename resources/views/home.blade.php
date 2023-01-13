<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="sm-2">Cotizador</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body{
            background-color: gray;
        }
    </style>
</head>
<body  class=" flex justify-center ">
    <div >
        <h1 >Cotizador!</h1><br>
        <a href="{{route('generar')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300 my-8">Generar pdf</button></a>

        <br><a href="{{route('cat')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300">API gatos(diferentes)</button></a>
        <br>
        <br><a href="{{route('index')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300">API CLIMA 2</button></a>
        <br><br><a href="{{route('imprimirvista2')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300">imprimir esta vista</button></a>

    </div>    </body>
</html>
