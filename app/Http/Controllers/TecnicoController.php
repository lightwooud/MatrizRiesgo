<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tecnico;


class TecnicoController extends Controller
{

    public function show()
    {
        if (!auth()->check()) {
            return view('auth.notlogin');
        }
        return view('auth.tecnico');
    }

    public function guardar(Request $request)
    {
            // Validar los datos del formulario
                $request->validate([

                    'codcontexto' => 'required|min:1',
                    'fecha'=> 'required',
                    'revision'=> 'required|min:3',
                    'software'=> 'required|min:3' ,
                    'hardware'=> 'required|min:3' ,
                    'reportes'=> 'required|min:3' ,
                ]);
            

            // Crear una nueva instancia del modelo y asignar los valores del formulario
            $tecnico = new Tecnico(); // Reemplaza 'TuModelo' por el nombre del modelo correspondiente
            $tecnico->codcontexto = $request->input('codcontexto');
            $tecnico->revision = $request->input('revision');
            $tecnico->fecha = $request->input('fecha');
            $tecnico->software = $request->input('software');
            $tecnico->hardware = $request->input('hardware');
            $tecnico->reportes = $request->input('reportes');

            $tecnico->save();
           

    }
}