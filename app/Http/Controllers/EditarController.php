<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EditarController extends Controller
{

  

    public function editar($id)
{
    $usuario = User::findOrFail($id);
    return view('auth.editar', compact('usuario'));
}

    
public function update(Request $request, $id)
{
    $usuario = User::findOrFail($id);
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->save();
    return redirect()->route('home.index')->with('success', 'Usuario actualizado correctamente');
}





}
