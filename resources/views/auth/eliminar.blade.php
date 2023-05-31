@extends('layouts.auth-master')

@section('content')
    <h1 class="mt-5">Eliminar usuario</h1>

    <form action="{{ route('eliminar', ['id' => $usuario->id]) }}" method="POST" >
        @csrf
        @method('DELETE')

        <div class="form-group mt-5 ">
            <label  for="name" class="col-1">Nombre:</label>
            <input type="text" class="col-3  mb-4 text-center" id="name" name="name" value="{{ $usuario->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="email" class="col-1">Username:</label>
            <input type="email" class=" col-3 mb-4 text-center" id="email" name="email" value="{{ $usuario->username }}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="col-3 center text-center" id="email" name="email" value="{{ $usuario->email }} " align-text="center" disabled>
        </div>
        
        <button type="submit" class="btn btn-danger mt-5">Eliminar</button>
    </form>


@endsection
