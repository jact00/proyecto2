@extends('layouts.app')

@section('contenido')

<br>
<h3>{{ $libro->isbn }} - {{ $libro->nombre }}</h3>
<br>

<div class ="row">
    <div class="col-lg-6">
        <table class="table table-hover table-bordered">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="table-primary">Autor:</th>
                    <td class ="table-secondary">{{ $libro->autor }}</td>
                </tr>
                <tr>
                     <th scope="row" class="table-primary">Editorial:</th>
                    <td class ="table-secondary">{{ $libro->editorial }}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-primary">Edición:</th>
                    <td class ="table-secondary">{{ $libro->edicion }}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-primary">Año:</th>
                    <td class ="table-secondary">{{ $libro->anio }}</td>
                </tr>
                <tr>
                    <th scope="row" class="table-primary">Páginas:</th>
                    <td class ="table-secondary">{{ $libro->paginas }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br>

<div class="d-flex">
    <a class="btn btn-primary" href="{{ route('libro.edit', [$libro]) }}" inline>Editar</a>
    <form action="{{ route('libro.destroy', [$libro]) }}" method="POST" name="borrar">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>

@endsection