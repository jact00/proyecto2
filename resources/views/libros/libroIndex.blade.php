@extends('layouts.app')

@section('contenido')

<div class="page-header">
    <br>
    <h3> Lista de libros</h3>
    <br>
</div>

<table class="table table-hover table-bordered">
    <thead>
        <tr class="table-primary">
            <th scope="col">ISBN</th>
            <th scope="col">Nombre</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Edición</th>
            <th scope="col">Año</th>
            <th scope="col">Páginas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr class="table-secondary">
            <th scope="row">
                <a href="{{ route('libro.show', [$libro]) }}">{{ $libro->isbn }}</a>
            </th>
            <td>{{ $libro->nombre }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->editorial }}</td>
            <td>{{ $libro->edicion }}</td>
            <td>{{ $libro->anio }}</td>
            <td>{{ $libro->paginas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection 