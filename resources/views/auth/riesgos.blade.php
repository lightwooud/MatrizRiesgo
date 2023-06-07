
@extends('layouts.app-master')
@section('content')

    
    <div class="container mt-3">
        <div class="container text-center border">
            <div class="row">
              <div class="col-sm-3 border" style="font-size: 50px" >SAYA</div>
              <div class="col-sm-6 border" style="font-size: 20px">FORMATO
                <div class="row">
                    <div class="">MATRIZ GESTIÓN DE RIESGOS DE SEGURIDAD DIGITAL</div>
                </div>  
              </div>
              <div class="row col-sm-3">
               
                <div class="d-flex align-items-center justify-content-center" style="text-align: left">Pagina: 1 de 1</div>
              </div>
            </div>
        </div>
        <div class="mt-5 container border">
            <h1>Matriz de Riesgos Registrados</h1>

            <!-- Mostrar tabla de riesgos -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Probabilidad</th>
                        <th>Impacto</th>
                        <th>Riesgo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riesgos as $riesgo)
                        <tr>
                            <td>{{ $riesgo->nombre }}</td>
                            <td>{{ $riesgo->descripcion }}</td>
                            <td>{{ $riesgo->probabilidad }}</td>
                            <td>{{ $riesgo->impacto }}</td>
                            <td style="background-color:
                                @if($riesgo->resultado < 6)
                                    purple
                                @elseif($riesgo->resultado >= 7 && $riesgo->resultado <= 10)
                                    green
                                @elseif($riesgo->resultado >= 12 && $riesgo->resultado <= 14)
                                    yellow
                                @elseif($riesgo->resultado >= 20 && $riesgo->resultado <= 36)
                                    orange
                                @else
                                    red
                                @endif"
                        >
                                @if($riesgo->resultado < 6)
                                Muy baja
                                @elseif($riesgo->resultado >= 7 && $riesgo->resultado <= 10)
                                    Baja
                                @elseif($riesgo->resultado >= 12 && $riesgo->resultado <= 14)
                                    Media
                                @elseif($riesgo->resultado >= 20 && $riesgo->resultado <= 36)
                                    Alta
                                @else
                                    Muy alta
                                @endif</td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3 container border">
            <!-- Formulario para agregar un nuevo riesgo -->
            <h2>Agregar nuevo riesgo</h2>
            <form action="{{ route('riesgos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="probabilidad">Probabilidad:</label>
                    <input type="number" name="probabilidad" id="probabilidad" max="9" class="form-control">
                </div>
                <div class="form-group">
                    <label for="impacto">Impacto:</label>
                    <input type="number" name="impacto" id="impacto" class="form-control" max="9">
                </div>
                
                <div>
                    <div class="d-grid gap-2 d-md-flex p-3 justify-content-md-end">
                        
                        <button type="submit" class="btn btn-success">AGREGAR RIESGOS </button>
                        <a href="{{ route('dofa.show') }}" class="btn btn-warning">DOFA</a>
                        <a href="{{ route('contexto.show') }}" class="btn btn-warning">CONTEXTO</a>
                        <a href="{{ route('tecnico.show') }}" class="btn btn-warning">REQUISITOS TECNICOS</a>
                    </div>
        
                </div>
                
            </form>
        </div>
    </div>
@endsection
