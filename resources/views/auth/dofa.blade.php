@extends('layouts.app-master')

<style>
    .td-min-characters {
        max-width: 200px; 
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis; 
    }
</style>

@section('content')
    <div class="bg-light p-5 ">
        <form method="post" action="{{ route('dofa.guardar') }}" class="container ">

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
                <div class="">Código contexto: <input type="text" name="codcontexto" ></div>
                <div class="" style="text-align: left">Pagina: 1 de 1</div>
              </div>
            </div>
        </div>
        
        <div class="mt-5 container border">
            <h1>DOFAS Guardados</h1>

            <!-- Mostrar tabla de riesgos -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Cod. Contexto</th>
                        <th>P.Internas</th>
                        <th>P.Externas</th>
                        <th>Fortalezas</th>
                        <th>Debilidades</th>
                        <th>Oportunidades</th>
                        <th>Amenazas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dofa as $dofas)
                        <tr>
                            <td class="td-min-characters">{{ $dofas->codcontexto}}</td>
                            <td class="td-min-characters">{{ $dofas->internas}}</td>
                            <td class="td-min-characters">{{ $dofas->externas }}</td>
                            <td class="td-min-characters">{{ $dofas->fortalezas}}</td>
                            <td class="td-min-characters">{{ $dofas->debilidades}}</td>
                            <td class="td-min-characters">{{ $dofas->oportunidades}}</td>
                            <td  class="td-min-characters">{{ $dofas->amenazas}}</td>
                            
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" mt-5 container border text-center">
            <div class="row">
                <div class="col-sm-4 border" >
                        <label>PARTES INTERESADAS</label>
                        
                </div>
                <div class="col-sm-8 border" >
                        <label>DOFA</label>
                 
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-4 border"  style="height: 200px" >
                        <label>INTERNAS</label>
                        <input type="textarea" name="internas" style="height: 200px; width:270px" >
                </div>
                <div class="col-sm-4 border" >
                        <label style="font-size: 11px" >FORTALEZAS</label>
                        <input type="textarea" name="fortalezas"  style="height: 200px; width:270px;margin-left: 23px">
                </div>
                <div class="col-sm-4 border" >
                        <label style="font-size: 11px">DEBILIDADES</label>
                        <input type="textarea" name="debilidades" style="height: 200px; width:270px">
                </div>  
            </div>

            <div class="row">
                <div class="col-sm-4 border" style="height: 200px">
                        <label>EXTERNAS</label>
                        <input type="textarea" name="externas" style="height: 200px; width:270px">
                </div>
                <div class="col-sm-4 border" >
                        <label style="font-size: 11px">OPORTUNIDADES</label>
                        <input type="textarea" name="oportunidades" style="height: 200px; width:270px">
                </div>
                <div class="col-sm-4 border" >
                        <label style="font-size: 12px">AMENAZAS</label>
                        <input type="textarea" name="amenazas" style="height: 200px; width:270px">
                </div>  
        </div>
        

        <div>
            <div class="d-grid gap-2 d-md-flex p-3 justify-content-md-end">
                
                <button type="submit" class="btn btn-success">ENVIAR </button>
                <a href="{{ route('contexto.show') }}" class="btn btn-warning">CONTEXTO</a>
                <a href="{{ route('tecnico.show') }}" class="btn btn-warning">REQUISITOS TECNICOS</a>
                <a href="{{ route('riesgos.index') }}" class="btn btn-warning">MATRIZ DE RIESGOS</a>
            </div>

        </div>
       </form>
       
    </div>
@endsection
