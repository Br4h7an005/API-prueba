<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correos;

class CorreoController extends Controller
{
    // Index
    public function index() 
    {
        // Instancia de la clase Correos
        $correos = Correos::paginate(3);
        return response()->json($correos); // 3 registros por página en JSON
    }
}
