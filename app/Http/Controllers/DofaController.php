<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Dofa;


class DofaController extends Controller
{

    public function show()
    {
        $dofa = Dofa::all();
        if (!auth()->check()) {
            return view('auth.notlogin');
        }
       
        return view('auth.dofa',compact('dofa'));
    }

    public function guardar(Request $request)
    {
            // Validar los datos del formulario
                $request->validate([

                    'codcontexto' => 'required|min:1',
                    'internas'=> 'required|min:3',
                    'externas'=> 'required|min:3',
                    'debilidades'=> 'required|min:3' ,
                    'fortalezas'=> 'required|min:3' ,
                    'oportunidades'=> 'required|min:3' ,
                    'amenazas'=> 'required|min:3' ,
                ]);
            

            // Crear una nueva instancia del modelo y asignar los valores del formulario
            $dofa = new Dofa(); // Reemplaza 'TuModelo' por el nombre del modelo correspondiente
            $dofa->codcontexto = $request->input('codcontexto');
            $dofa->internas = $request->input('internas');
            $dofa->externas = $request->input('externas');
            $dofa->debilidades = $request->input('debilidades');
            $dofa->fortalezas = $request->input('fortalezas');
            $dofa->oportunidades = $request->input('oportunidades');
            $dofa->amenazas = $request->input('amenazas');

            $dofa->save();
        

            
    

    }
    
}