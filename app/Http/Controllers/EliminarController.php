<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class EliminarController extends Controller
{

    public function buscar($id)
    {
        $usuario = User::findOrFail($id);
        return view('auth.eliminar', compact('usuario'));
    }

    public function eliminar($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('home.index')->with('success', 'Usuario eliminado correctamente');
    }
    

}
