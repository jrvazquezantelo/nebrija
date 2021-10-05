<?php

namespace App\Http\Controllers;

use App\Models\ProfesorAsignatura;
use Illuminate\Http\Request;

class ProfesorAsignaturaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('buscar'))
        {
            return ProfesorAsignatura::select('asignatura.nombre as asignatura', 'profesor.nombre as profesor')
                                ->leftJoin('profesor', 'profesor.id', '=', 'profesor-asignatura.idProfesor')
                                ->leftJoin('asignatura', 'asignatura.id', '=', 'profesor-asignatura.idAsignatura')
                                ->where('asignatura.nombre', 'like', '%' . $request->buscar . '%')
                                ->orWhere('profesor.nombre', 'like', '%' . $request->buscar . '%')
                                ->get();
        }
        return ProfesorAsignatura::select('asignatura.nombre as asignatura', 'profesor.nombre as profesor')
                                ->leftJoin('profesor', 'profesor.id', '=', 'profesor-asignatura.idProfesor')
                                ->leftJoin('asignatura', 'asignatura.id', '=', 'profesor-asignatura.idAsignatura')
                                ->get();
    }
}
