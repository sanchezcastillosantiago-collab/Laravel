<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <a href ="{{ route('tarea.index') }}">Volver a la lista de tareas</a>
</p>
    <h1>Detalle de la tarea : {{$tarea->titulo}}</h1>
    
    <p>
        {{ $tarea->descripcion}}
    </p>
</body>
</html>