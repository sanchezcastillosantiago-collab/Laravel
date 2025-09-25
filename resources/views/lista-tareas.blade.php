<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    
<h1>Lista de Tarea</h1>
<ul>
    @foreach($tareas as $tarea)
        <li>
            ID:{{ $tarea->id }} <strong>{{ $tarea->titulo }}</strong><br>
            {{ $tarea->descripcion }}
        </li>
    @endforeach
</body>
</html>