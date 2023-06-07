<?php
namespace App\Http\Controllers;

use App\Models\Riesgo;
use Illuminate\Http\Request;

class RiesgosController extends Controller
{
    public function index()
    {   
        
        $riesgos = Riesgo::all();
        
        if (!auth()->check()) {
            return view('auth.notlogin');
        }

        return view('auth.riesgos', compact('riesgos'));
    }

    public function store(Request $request)
    {

        $resultado = $request->input('probabilidad') * $request->input('impacto');
       
        $riesgo = new Riesgo();
        $riesgo->nombre = $request->input('nombre');
        $riesgo->descripcion = $request->input('descripcion');
        $riesgo->probabilidad = $request->input('probabilidad');
        $riesgo->impacto = $request->input('impacto');
        $riesgo->resultado = $resultado;

        $riesgo->save();    

        return redirect()->route('riesgos.index');
    }
}

?>