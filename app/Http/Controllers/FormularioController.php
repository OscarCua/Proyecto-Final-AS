<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Encargado;
use App\Models\Parentesco;
use Illuminate\Http\Request;

class FormularioController extends Controller {



    public function create() {
        return view('Formularios/formulario-combinado');
    }

    public function store(Request $request) {
        // Validación de datos
        $request->validate([
            'cui' => 'required|unique:alumnos,cui',
            'nombre1' => 'required',
            'apellido1' => 'required',
            'fecha_nac' => 'required|date',
            'dpi' => 'required|unique:encargados,dpi',
            'tel1' => 'required',
            'tipo_parentesco' => 'required',
            'prioridad' => 'required',
        ]);

        // Guardar datos del alumno
        $alumno = Alumno::create($request->only('cui', 'nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'fecha_nac'));

        $request->validate([
            'dpi' => 'required|unique:encargados,dpi',
            'nombre1' => 'required',
            'apellido1' => 'required',
            'fecha_nac' => 'required|date',
             'tel1' => 'required' ]);
        // Guardar datos del encargado
        $encargado = Encargado::create($request->only('dpi', 'nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'fecha_nac', 'tel1', 'tel2', 'direcc'));

        // Guardar datos del parentesco
        Parentesco::create([
            'alumno_fk' => $alumno->id,
            'encargado_fk' => $encargado->id,
            'tipo_parentesco' => $request->input('tipo_parentesco'),
            'prioridad' => $request->input('prioridad')
        ]);

        return redirect()->back()->with('success', 'Datos guardados correctamente.');
    }
}
