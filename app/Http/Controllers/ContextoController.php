<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contexto;


class ContextoController extends Controller
{

    public function show()
    {
        if (!auth()->check()) {
            return view('auth.notlogin');
        }
        return view('auth.contexto');
    }

    public function guardar(Request $request)
    {
            // Validar los datos del formulario
                $request->validate([

                    'codigo' => 'required|min:1',
                    'revision' => 'required|min:1',
                    'fecha'=> 'required|min:3',
                    'objetivo'=> 'required|min:3',
                    'alcance'=> 'required|min:3' ,
                    'enfoque'=> 'required|min:3' ,
                ]);
            

            // Crear una nueva instancia del modelo y asignar los valores del formulario
            $contexto = new Contexto(); // Reemplaza 'TuModelo' por el nombre del modelo correspondiente
            $contexto->codigo = $request->input('codigo');
            $contexto->revision = $request->input('revision');
            $contexto->fecha = $request->input('fecha');
            $contexto->objetivo = $request->input('objetivo');
            $contexto->alcance = $request->input('alcance');
            $contexto->enfoque = $request->input('enfoque');

            $contexto->save();
           

    }
}