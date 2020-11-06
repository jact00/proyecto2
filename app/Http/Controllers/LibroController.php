<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();

        return view('libros/libroIndex', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('libros/libroForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        	'isbn' => 'required|unique:libros|digits_between:10,13',
        	'nombre' => 'required|max:100',
        	'autor' => 'nullable|max:255',
        	'editorial' => 'required|max:100',
        	'edicion' => 'required|digits_between:1,4',
        	'anio' => 'required|integer|min:1900|max:2020',
        	'paginas' => 'required|digits_between:2,4',
        ]);

        if($request->autor === null)
        	$libro = $request->except('autor');
        else
        	$libro = $request;
        Libro::create($libro);

        return redirect()->route('libro.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros/libroShow', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libros/libroForm', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        //
        $request->validate([
        	'nombre' => 'required|max:100',
        	'autor' => 'nullable|max:255',
        	'editorial' => 'required|max:100',
        	'edicion' => 'required|digits_between:1,4',
        	'anio' => 'required|integer|min:1900|max:2020',
        	'paginas' => 'required|digits_between:2,4',
        ]);

        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor ?? 'anonimo';
        $libro->editorial = $request->editorial;
        $libro->edicion = $request->edicion;
        $libro->anio = $request->anio;
        $libro->paginas = $request->paginas;

        $libro->save();

        return redirect()->route('libro.show', [$libro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
