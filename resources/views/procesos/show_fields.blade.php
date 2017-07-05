<style type="text/css">
.panel-default > .panel-heading-custom {
    background: #BDBDBD; color: #000000;
}
</style>

<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#collapse1">Datos de la Carpeta de Investigación</a>
        </h3> 
    </div> 
    <div id="collapse1" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-3 col-xs-3">
            <!-- Uipj Field -->
            <div class="form-group">
                <h4>{!! Form::label('uipj', 'UIPJ:') !!}</h4>
                <p>{!! $proceso->carpeta->uipj !!}</p> 
            </div>
        </div>
        <div class="col-md-3 col-xs-3">
            <!-- Numerocarpeta Field -->
            <div class="form-group">
                <h4>{!! Form::label('numero', 'Número de carpeta:') !!}</h4>
                <p>{!! $proceso->carpeta->numero !!}</p> 
            </div>
        </div>

        <div class="col-md-3 col-xs-3">
            <!-- Fiscal Field -->
            <div class="form-group">
                <h4>{!! Form::label('fiscal', 'Fiscal:') !!}</h4>
                <p>{!! $proceso->carpeta->fiscal !!}</p> 
            </div>
        </div>

        <div class="col-md-3 col-xs-3">
            <!-- Fecha Field -->
            <div class="form-group">
                <h4>{!! Form::label('fecha', 'Fecha de carpeta:') !!}</h4>
                <p>{!! $proceso->carpeta->fecha !!}</p> 
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>


<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom"> 
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" href="#collapse2">Radicación del Proceso Penal</a>
        </h3> 
    </div> 
    <div id="collapse2" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <!-- NumeroRadicacion Field -->
            <div class="form-group">
                <h4>{!! Form::label('numero', 'Número de radicación:') !!}</h4>
                <p>{!! $proceso->radicacion->numero !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Juzgado Field -->
            <div class="form-group">
                <h4>{!! Form::label('juzgado', 'Juzgado:') !!}</h4>
                <p>{!! $proceso->radicacion->juzgado !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Juez Field -->
            <div class="form-group">
                <h4>{!! Form::label('juez', 'Juez:') !!}</h4>
                <p>{!! $proceso->radicacion->juez !!}</p> 
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
</div>


<div class="panel panel-default"> 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" href="#collapse3">Víctimas</a>
        </h3> 
    </div> 
    <div id="collapse3" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">

        <div class="panel panel-default" > 
        <div class="panel-heading panel-heading-custom">
            <h3 class="panel-title" align="center">
                Víctimas Físicas
            </h3> 
        </div> 
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Tipo Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Tipo:') !!}</h5>
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Nombre Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Nombre Víctima:') !!}</h5>
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Fecha Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Fecha Nacimiento:') !!}</h5>
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Sexo Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Sexo:') !!}</h5>
                </div>
            </div>  

            <div class="col-md-1 col-xs-1">
                <!-- EstadoCivil Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Estado Civil:') !!}</h5>
                </div>
            </div>      

            <div class="col-md-3 col-xs-3">
                <!-- Direccion Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Dirección:') !!}</h5>
                </div>
            </div>   

            <div class="col-md-2 col-xs-2">
                <!-- Etnia Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Etnia:') !!}</h5>
                </div>
            </div>     
        </div>
        @foreach ($proceso->victimas as $victima) 
        <div class="row">
        @if($victima->victima->tipo === "FISICA")
            <div class="col-md-1 col-xs-1">
                <!-- Tipo Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->tipo !!}</p> 
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Nombre Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->nombre !!}</p> 
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Fecha Nacimiento Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->fechaNacimiento !!}</p>  
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Sexo Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->sexo !!}</p>  
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- EstadoCivil Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->estadoCivil !!}</p>  
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- Direccion Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->direccion !!}</p>  
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Etnia Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->etnia !!}</p>  
                </div>
            </div>
        @endif
        </div>
        @endforeach
        </div>


        <div class="panel panel-default" > 
        <div class="panel-heading panel-heading-custom">
            <h3 class="panel-title" align="center">
                Víctimas Morales
            </h3> 
        </div> 
        <div class="row">
            <div class="col-md-3 col-xs-3">
                <!-- Tipo Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Tipo:') !!}</h5>
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- Nombre Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Nombre Víctima:') !!}</h5>
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- RepresentanteLegal Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Representante Legal:') !!}</h5>
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- Direccion Label -->
                <div class="form-group">
                    <h5>{!! Form::label('Dirección:') !!}</h5>
                </div>
            </div>   
        </div>

        @foreach ($proceso->victimas as $victima) 
        <div class="row">
        @if ($victima->victima->tipo === "MORAL")
            <div class="col-md-3 col-xs-3">
                <!-- Tipo Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->tipo !!}</p> 
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- Nombre Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->nombre !!}</p> 
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- RepresentanteLegal Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->representanteLegal !!}</p>  
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <!-- Direccion Field -->
                <div class="form-group">
                    <p>{!! $victima->victima->direccion !!}</p>  
                </div>
            </div>
        @endif
        </div>
        @endforeach
        </div>

    </div>
    </div>
    </div>
</div>


<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" href="#collapse4">Imputados</a>
        </h3> 
    </div> 
    <div id="collapse4" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    

        <div class="panel panel-default" > 
        <div class="panel-heading panel-heading-custom">
            <h3 class="panel-title" align="center">
                Imputados Físicos
            </h3> 
        </div> 
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Tipo Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Tipo:') !!}</h6>
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Nombre Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Nombre Imputado:') !!}</h6>
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Alias Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Alias:') !!}</h6>
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- FechaNacimiento Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Fecha Nacimiento:') !!}</h6>
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Sexo Label -->
                <div class="form-group">
                    <h6>{!! Form::label('sexo', 'Sexo:') !!}</h6>
                </div>
            </div>  

            <div class="col-md-1 col-xs-1">
                <!-- EstadoCivil Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Estado Civil:') !!}</h6>
                </div>
            </div>      

            <div class="col-md-2 col-xs-2">
                <!-- Dirección Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Dirección:') !!}</h6>
                </div>
            </div>   

            <div class="col-md-2 col-xs-2">
                <!-- NombrePadre Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Nombre Padre:') !!}</h6>
                </div>
            </div>    

            <div class="col-md-1 col-xs-1">
                <!-- NombreMadre Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Nombre Madre:') !!}</h6>
                </div>
            </div>    
        </div>

        @foreach ($proceso->imputados as $imputado) 
        <div class="row">
        @if ($imputado->imputado->tipo === "fisica")
            <div class="col-md-1 col-xs-1">
                <!-- Tipo Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->tipo !!}</p> 
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Nombre Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->nombre !!}</p> 
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Alias Field -->
                <div class="form-group">
                    @empty($imputado->imputado->alias)
                        <p></p> 
                    @else
                        <p>{!! $imputado->imputado->alias !!}</p> 
                    @endif
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- FechaNacimiento Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->fechaNacimiento !!}</p> 
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- Sexo Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->sexo !!}</p> 
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- EstadoCivil Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->estadoCivil !!}</p> 
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- Direccion Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->direccion !!}</p> 
                </div>
            </div>

            <div class="col-md-2 col-xs-2">
                <!-- NombrePadre Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->nombrePadre !!}</p> 
                </div>
            </div>

            <div class="col-md-1 col-xs-1">
                <!-- NombreMadre Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->nombreMadre !!}</p> 
                </div>
            </div>
        @endif
        </div>
        @endforeach
        </div>


        <div class="panel panel-default" > 
        <div class="panel-heading panel-heading-custom">
            <h3 class="panel-title" align="center">
                Imputados Morales
            </h3> 
        </div> 
        <div class="row">
            <div class="col-md-4 col-xs-4">
                <!-- Tipo Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Tipo:') !!}</h6>
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <!-- Nombre Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Nombre Imputado:') !!}</h6>
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <!-- RepresentanteLegal Label -->
                <div class="form-group">
                    <h6>{!! Form::label('Representante Legal:') !!}</h6>
                </div>
            </div>   
        </div>

        @foreach ($proceso->imputados as $imputado) 
        <div class="row">
        @if ($imputado->imputado->tipo === "moral")
            <div class="col-md-4 col-xs-4">
                <!-- Tipo Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->tipo !!}</p> 
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <!-- Nombre Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->nombre !!}</p> 
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <!-- RepresentanteLegal Field -->
                <div class="form-group">
                    <p>{!! $imputado->imputado->representanteLegal !!}</p> 
                </div>
            </div>
        @endif
        </div>
        @endforeach
        </div>

    </div>
    </div>
    </div>
</div>

<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#collapse5">Imputaciones</a>
        </h3> 
    </div> 
    <div id="collapse5" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <!-- Victima Label -->
            <div class="form-group">
                <h4>{!! Form::label('Víctima:') !!}</h4>
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Delito Label -->
            <div class="form-group">
                <h4>{!! Form::label('Delito:') !!}</h4>
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Imputado Label -->
            <div class="form-group">
                <h4>{!! Form::label('Imputado:') !!}</h4>
            </div>
        </div>
    </div>

    @foreach ($proceso->imputaciones as $imputacion) 
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <!-- Victima Field -->
            <div class="form-group">
                <p>{!! $imputacion->imputacion->victima !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Delito Field -->
            <div class="form-group">
                <p>{!! $imputacion->imputacion->delito !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Imputado Field -->
            <div class="form-group">
                <p>{!! $imputacion->imputacion->imputado !!}</p> 
            </div>
        </div>
    </div>
    @endforeach
    </div>
    </div>
    </div>
</div>

<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

</script>