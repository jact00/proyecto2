<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <h1>Listado de Libros</h1>
    <a href="{{ route('libro.create') }}">Nuevo Libro</a>
    <hr>
    <table class="table">
        <tr>
            <th>ISBN</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Edición</th>
            <th>Año</th>
            <th>Páginas</th>
        </tr>
        @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->nombre }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->edicion }}</td>
                <td>{{ $libro->anio }}</td>
                <td>{{ $libro->paginas }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>