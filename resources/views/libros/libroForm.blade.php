<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="{{ route('libro.store') }}" method="POST">
        @csrf
        <label for="isbn">ISBN:</label>
        <input type="number" name="isbn" value="{{ old('isbn') ?? '' }}">
        <br>
        @if($errors->has('isbn'))
            <ul>
                @foreach($errors->get('isbn') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? '' }}">
        <br>
        @if($errors->has('nombre'))
            <ul>
                @foreach($errors->get('nombre') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="autor">Autor:</label>
        <input type="text" name="autor" value="{{ old('autor') ?? '' }}">
        <br>
        @if($errors->has('autor'))
            <ul>
                @foreach($errors->get('autor') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" value="{{ old('editorial') ?? '' }}">
        <br>
        @if($errors->has('editorial'))
            <ul>
                @foreach($errors->get('editorial') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="edicion">Edición:</label>
        <input type="number" name="edicion" value="{{ old('edicion') ?? '' }}">
        <br>
        @if($errors->has('edicion'))
            <ul>
                @foreach($errors->get('edicion') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="anio">Año:</label>
        <input type="number" name="anio" value="{{ old('anio') ?? '' }}">
        <br>
        @if($errors->has('anio'))
            <ul>
                @foreach($errors->get('anio') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <label for="paginas">Páginas:</label>
        <input type="number" name="paginas" value="{{ old('paginas') ?? '' }}">
        <br>
        @if($errors->has('paginas'))
            <ul>
                @foreach($errors->get('paginas') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit">Guardar</button>
    </form>
</body>
</html>