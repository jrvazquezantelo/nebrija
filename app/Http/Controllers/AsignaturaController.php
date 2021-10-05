<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('buscar'))
        {
            return Asignatura::select('asignatura.nombre as asignatura', 'estudio.nombre as estudio')
                                ->leftJoin('estudio', 'estudio.id', '=', 'asignatura.idEstudio')
                                ->where('asignatura.nombre', 'like', '%' . $request->buscar . '%')                                    
                                ->get();
        }
        return Asignatura::select('asignatura.nombre as asignatura', 'estudio.nombre as estudio')
                            ->leftJoin('estudio', 'estudio.id', '=', 'asignatura.idEstudio')
                            ->get();
    }
}
