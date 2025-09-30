<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    
<h1>Lista de Tareas</h1>
<a href="{{ route('tarea.create') }}">Crear Nueva Tarea</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
            <tr>
                <td>{{ $tarea->id }}</td>
                <td><a href="{{ route('tarea.show', $tarea->id) }}">{{ $tarea->titulo }}</a></td>
                <td>{{ $tarea->descripcion }}</td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea->id) }}">Editar</a>
                    <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>