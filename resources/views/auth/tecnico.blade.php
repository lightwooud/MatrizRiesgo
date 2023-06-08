@extends('layouts.app-master')

<style>
    .td-min-characters {
        max-width: 200px; /* Ancho máximo del <td> */
        white-space: nowrap; /* Evita el salto de línea */
        overflow: hidden; /* Oculta el texto que desborda el ancho */
        text-overflow: ellipsis; /* Agrega puntos suspensivos al final del texto que desborda */
    }
</style>

@section('content')
    <div class="bg-light p-5 ">
        <form method="post" action="{{ route('tecnico.guardar') }}" class="container ">

            @csrf
        <div class="container text-center border">
            <div class="row">
              <div class="col-sm-3 border" style="font-size: 50px" >SAYA</div>
              <div class="col-sm-6 border" style="font-size: 20px">FORMATO
                <div class="row">
                    <div class="">MATRIZ GESTIÓN DE RIESGOS DE SEGURIDAD DIGITAL</div>
                </div>  
              </div>
              <div class="row col-sm-3">
                <div class="">Código Contexto: <input type="text" name="codcontexto" style="width:170px"  ></div>
                <div class="" style="text-align: left">Revision: <input  type="number" class="col-sm-8" name="revision" > </div>
                <div class="" style="text-align: left">Fecha: <input  type="date" class="col-sm-9"  name="fecha" ></div>
                <div class="" style="text-align: left">Pagina: 1 de 1</div>
              </div>
            </div>
        </div>
        <div class="mt-5 container border">
            <h1>Requisitos tecnicos Guardados</h1>

            <!-- Mostrar tabla de riesgos -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Cod.Contexto</th>
                        <th>Revision</th>
                        <th>Fecha</th>
                        <th>software</th>
                        <th>Hardware</th>
                        <th>Reportes</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tecnicos as $tecnico)
                        <tr>
                            <td>{{ $tecnico->codcontexto }}</td>
                            <td>{{ $tecnico->revision }}</td>
                            <td>{{ $tecnico->fecha }}</td>
                            <td class="td-min-characters">{{ $tecnico->software}}</td>
                            <td class="td-min-characters">{{ $tecnico->hardware}}</td>
                            <td  class="td-min-characters">{{ $tecnico->reportes}}</td>
                            
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5 container ">
            <h1>Agregar requisitos tecnicos</h1>
            <div class="mt-4 row">
                <div class="col-sm-2 border"><h5>ID</h5>
                    <div class="row border" style="height: 303px">
                        <h5>1</h5>
                    </div>
                    <div class="row border" style="height: 303px">
                        <h5>2</h5>
                    </div>
                    <div class="row border" style="height: 303px">
                        <h5>3</h5>
                    </div>
                </div>
                
                <div class="col-sm-10 border"><h5>REQUISITOS TÉCNICOS PARA LA HERRAMIENTA</h5>
                    <div class="row border">
                        <h5>Requerimientos de software</h5>
                        <input type="textarea" name="software" style="height: 270px">
                    </div>
                    <div class="row">
                        <h5>Requerimientos de hardware</h5>
                        <input type="textarea" name="hardware" style="height: 270px">
                    </div>
                    <div class="row">
                        <h5>reportes</h5>
                        <input type="textarea" name="reportes" style="height: 270px">
                    </div>
                </div>

                
                
                
            </div>
        </div>
        <div>
            <div class="d-grid gap-2 d-md-flex p-3 justify-content-md-end">
                
                <button type="submit" class="btn btn-success">ENVIAR </button>
                <a href="{{ route('dofa.show') }}" class="btn btn-warning">DOFA</a>
                <a href="{{ route('contexto.show') }}" class="btn btn-warning">CONTEXTO</a>
                <a href="{{ route('riesgos.index') }}" class="btn btn-warning">MATRIZ DE RIESGOS</a>
            </div>

        </div>
       </form>
       
    </div>
@endsection