<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::all();
       return view('lista-tareas', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('crear-tarea'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //return 'Tarea Creada';  //
        //dd($request->all(),$request->titulo, $request->descripcion);
        //Recibir informacion del formulario
        //Validar la informacion
        $tarea= new Tarea();
        $tarea->titulo=$request->titulo;
        $tarea->descripcion=$request->descripcion;
        //$tarea->comentarios=$request->comentarios;
        $tarea->save();

        return redirect()->route('tarea.show', $tarea->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
       return view('ver-tarea', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
       return view('editar-tarea', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
