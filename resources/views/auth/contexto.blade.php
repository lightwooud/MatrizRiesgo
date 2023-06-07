@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 ">
        <form method="post" action="{{ route('contexto.guardar') }}" class="container ">

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
                <div class="">Código: <input type="text" name="codigo" ></div>
                <div class="" style="text-align: left">Revision: <input  type="number" class="col-sm-8" name="revision" > </div>
                <div class="" style="text-align: left">Fecha: <input  type="date" class="col-sm-9"  name="fecha" ></div>
                <div class="" style="text-align: left">Pagina: 1 de 1</div>
              </div>
            </div>
        </div>
        <div class="col-sm-12 border text-center"><h5>CONTEXTO</h5></div>
        
        <div class="container text-center border">
            <div class="row ">
                <div class="col-sm-4 text-center"><h6>OBJETIVO:</h6></div>
                <input type="textarea" class="col-sm-8"  name="objetivo" style="display:inline">
            </div>
        </div>
        <div class="container text-center border">
            <div class="row ">
                <div class="col-sm-4 text-center"><h6>ALCANCE DE GESTION DE RIESGOS:</h6></div>
                <input type="textarea" class="col-sm-8"  name="alcance" style="display:inline">
            </div>
        </div>

        <div class="container text-center border">
            <div class="row ">
                <div class="col-sm-4 text-center"><h6>ENFOQUE METODOLOGICO:</h6></div>
                <input type="textarea" class="col-sm-8"  name="enfoque" style="display:inline">
            </div>
        </div>

        <div class="container text-center border">
            <div class="row ">
                <div class="col-sm-4 text-center"><h6>CRITERIOS BASICOS:</h6></div>
                <div class="col-sm-8 "><p>Se tratarán los riesgos cuyos niveles sean:

                    •  EXTREMO 
                    •  ALTO 
                    
                    Se aceptarán los riesgos cuyo resultado después de la valoración de riesgos sean:
                    
                    •  BAJO  
                    •  MODERADO
                         
                    Una vez aplicados los controles se acepta un riesgo de residual en niveles "BAJO" o "MODERADO"
                    </p><p>Criterios para la valoración del activo:Se evalúan los niveles de confidencialidad, integridad y disponibilidad requeridos para cada activo de información.

                        Criterios de impacto: Los criterios de impacto del riesgo en términos del grado de daño o de costos, causados por un evento de seguridad de la información, considerando los siguientes aspectos: Incumplimiento de los requisitos legales, reglamentarios o contractuales, brechas de seguridad de la información (por ejemplo, pérdida de confidencialidad, integridad y disponibilidad), Operaciones deterioradas (partes internas o terceras partes), alteración de planes y fechas límites y daños para la reputación.
                        
                        Criterios de probabilidad de ocurrencia: Se estima la probabilidad de ocurrencia de un riesgo sobre uno o varios activos debido a la explotación de amenazas por una o mas vulnerabilidades (causantes de riesgo). Se tiene en cuenta: Evaluación de riesgos, Cambios en la tecnología, Vulnerabilidades de día cero, Personas, Implementación de controles, No conformidades, Tiempos de respuesta, Criticidad de los activos de información.</p></div>
            </div>
        </div>
        <div>
            <div class="d-grid gap-2 d-md-flex p-3 justify-content-md-end">
                
                <button type="submit" class="btn btn-success">ENVIAR </button>
                <a href="{{ route('dofa.show') }}" class="btn btn-warning">DOFA</a>
                <a href="{{ route('tecnico.show') }}" class="btn btn-warning">REQUISITOS TECNICOS</a>
                <a href="{{ route('riesgos.index') }}" class="btn btn-warning">MATRIZ DE RIESGOS</a>
            </div>

        </div>
       </form>
       
    </div>
@endsection
