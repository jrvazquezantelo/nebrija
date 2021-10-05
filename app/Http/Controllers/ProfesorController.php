<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('buscar'))
        {
            return Profesor::where('nombre', 'like', '%' . $request->buscar . '%')                                    
                              ->get();
        }
        return Profesor::all();
    }
}
