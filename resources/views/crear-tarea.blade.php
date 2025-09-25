<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea</title>
</head>
<body>
     <h1>Crear Tarea</h1>
  <form action=""  method="POST">
    @csrf
    <label for="titulo">Título:</label><br><br>
    <input type="text" id="titulo" name="titulo" >
    <br>
    <br>
    <label for="descripcion">Descripción:</label><br><br>
    <textarea id="descripcion" name="descripcion" ></textarea>
    <br><br>
    <button type="submit">Crear Tarea</button>
</body>
</html>