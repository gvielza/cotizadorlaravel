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
<body class="container mx-auto px-4 flex flex-col justify-center items-center" >
    <div >
        <h1 >Cotizador!</h1><br>
        <a href="{{route('generar')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300 my-8">Generar pdf</button></a>
        <br><a href="{{route('consumir')}}"><button class="rounded-md border-solid border-4 border-light-blue-100 hover:bg-blue-300">consumir API</button></a>
</body>
</html>
