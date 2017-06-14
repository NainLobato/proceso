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
        <div class="col-md-4 col-xs-4">
            <!-- Numerocarpeta Field -->
            <div class="form-group">
                <h4>{!! Form::label('numeroCarpeta', 'Numero de carpeta:') !!}</h4>
                <p>{!! $proceso->numeroCarpeta !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Fiscal Field -->
            <div class="form-group">
                <h4>{!! Form::label('fiscal', 'Fiscal:') !!}</h4>
                <p>{!! $proceso->fiscal->fiscal !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Fecha Field -->
            <div class="form-group">
                <h4>{!! Form::label('fechaCarpeta', 'Fecha de carpeta:') !!}</h4>
                <p>{!! $proceso->fechaCarpeta !!}</p> 
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
            <!-- Fecha Field -->
            <div class="form-group">
                <h4>{!! Form::label('fechaRadicacion', 'Fecha de radicación:') !!}</h4>
                <p>{!! $proceso->fechaRadicacion->format('d M. Y') !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Juzgado Field -->
            <div class="form-group">
                <h4>{!! Form::label('juzgado', 'Juzgado:') !!}</h4>
                <p>{!! $proceso->juzgado->juzgado !!}</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Juez Field -->
            <div class="form-group">
                <h4>{!! Form::label('juez', 'Juez:') !!}</h4>
                <p>{!! $proceso->juez->juez !!}</p> 
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

    @for ($i = 0; $i < 4; $i++)
    <div class="row">
        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Moral</p> 
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Carlos Pérez Hernández</p> 
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>20/01/1988</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>masculino</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>casado</p> 
            </div>
        </div>

        <div class="col-md-3 col-xs-3">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>calle 6 #149 Col. Mexico C.P 57900</p> 
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>tzotzil</p> 
            </div>
        </div>

    </div>
    @endfor
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
            <!-- Fecha Label -->
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

        <div class="col-md-1 col-xs-1">
            <!-- representanteLegal Label -->
            <div class="form-group">
                <h6>{!! Form::label('Representante legal:') !!}</h6>
            </div>
        </div>    

        <div class="col-md-1 col-xs-1">
            <!-- Padre Label -->
            <div class="form-group">
                <h6>{!! Form::label('Nombre padre:') !!}</h6>
            </div>
        </div>  

        <div class="col-md-1 col-xs-1">
            <!-- Madre Label -->
            <div class="form-group">
                <h6>{!! Form::label('Nombre madre:') !!}</h6>
            </div>
        </div>   
    </div>

    @for ($i = 0; $i < 5; $i++)
    <div class="row">
        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Moral</p> 
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Daniela Robles Hernández</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Charly</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>20/01/1988</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>masculino</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>casado</p> 
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>calle 6 #149 Col. Mexico C.P 57900</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Martin Lopez Ramirez</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>María Hernandez Garcia</p> 
            </div>
        </div>

        <div class="col-md-1 col-xs-1">
            <!-- Tipo Field -->
            <div class="form-group">
                <p>Juan Perez Gonzalez</p> 
            </div>
        </div>

    </div>
    @endfor
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
            <!-- Delito Field -->
            <div class="form-group">
                <h4>{!! Form::label('Delito:') !!}</h4>
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Fecha Field -->
            <div class="form-group">
                <h4>{!! Form::label('Imputado:') !!}</h4>
            </div>
        </div>
    </div>

    @for ($i = 0; $i < 5; $i++)
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <!-- Victima Field -->
            <div class="form-group">
                <p>Carlos Pérez Hernández</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Delito Field -->
            <div class="form-group">
                <p>Robo</p> 
            </div>
        </div>

        <div class="col-md-4 col-xs-4">
            <!-- Imputado Field -->
            <div class="form-group">
                <p>Daniela Robles Hernández</p> 
            </div>
        </div>
    </div>
    @endfor


    </div>
    </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>