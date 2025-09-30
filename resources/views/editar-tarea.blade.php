<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Tarea</h1>
        <form action="{{ route('tarea.update', $tarea->id) }}"  method="POST">
    @csrf
    @method('PATCH')
    <label for="titulo">Título:</label><br><br>
    <input type="text" id="titulo" name="titulo" value="{{ $tarea->titulo }}" >
    <br>
    <br>
    <label for="descripcion">Descripción:</label><br><br>
    <textarea id="descripcion" name="descripcion" >{{ $tarea->descripcion }}</textarea>
    <br><br>
    <button type="submit">Crear Tarea</button>
    
</body>
</html>