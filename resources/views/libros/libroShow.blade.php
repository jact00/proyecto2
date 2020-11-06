<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <a href="{{ route('libro.index') }}">Listado de Libros</a>
    <a href="{{ route('libro.edit', [$libro]) }}">Editar Libro</a>
    <hr>
    <h1>{{ $libro->isbn }} - {{ $libro->nombre }}</h1>
    <ul>
        <li>Autor: {{ $libro->autor }}</li>
        <li>Editorial: {{ $libro->editorial }}</li>
        <li>Edición: {{ $libro->edicion }}</li>
        <li>Año: {{ $libro->anio }}</li>
        <li>Páginas: {{ $libro->paginas }}</li>
    </ul>
</body>
</html>