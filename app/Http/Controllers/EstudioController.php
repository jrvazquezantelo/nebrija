<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('buscar'))
        {
            $estudio = Estudio::where('nombre', 'like', '%' . $request->buscar . '%')                                    
                               ->get();
        }
        else 
        {
            $estudio = Estudio::all();
        }
        return $estudio;
    }
}
