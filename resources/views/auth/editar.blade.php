@extends('layouts.auth-master')

@section('content')
    <h1 class="mt-5">Editar usuario</h1>

    <form method="POST" action="{{ route('usuarios.update', ['id' => $usuario->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group mt-5  ">
            <label for="name " class="col-1">Nombre:</label>
            <input type="text" class="col-3  mb-4 text-center" id="name" name="name" value="{{ $usuario->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="col-3  mb-4 text-center" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Guardar cambios</button>
    </form>
@endsection



