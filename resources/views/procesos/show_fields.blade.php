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
                    <div class="col-xs-12 col-sm-6 col-md-3 ">
                        <!-- Uipj Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('uipj', 'UIPJ:') !!}</h4>
                            <p>{!! $proceso->carpeta->uipj !!}</p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 ">
                        <!-- Numerocarpeta Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('numero', 'Número de carpeta:') !!}</h4>
                            <p>{!! $proceso->carpeta->numero !!}</p> 
                        </div>
                    </div>
                    <div class="clearfix visible-xs visible-sm"></div>
                    <div class="col-xs-6 col-md-3 ">
                        <!-- Fiscal Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('fiscal', 'Fiscal:') !!}</h4>
                            <p>{!! $proceso->carpeta->fiscal !!}</p> 
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 ">
                        <!-- Fecha Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('fecha', 'Fecha de carpeta:') !!}</h4>
                            <p>{!! $proceso->carpeta->fecha->format('d-m-Y') !!}</p> 
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
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <!-- NumeroRadicacion Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('numero', 'Número de radicación:') !!}</h4>
                            <p>{!! $proceso->radicacion->numero !!}</p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <!-- Juzgado Field -->
                        <div class="form-group">
                            <h4>{!! Form::label('juzgado', 'Juzgado:') !!}</h4>
                            <p>{!! $proceso->radicacion->juzgado !!}</p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
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
            @empty($proceso->victimas)
                <h3 class="text-center">No hay víctimas registradas.</h3>
            @else
                <?php $vicmor = 0; $vicfis = 0; ?>
                @foreach($proceso->victimas as $victima)
                    @if($victima->tipo === "FISICA")
                        <?php $vicfis = 1; ?>
                    @endif
                    @if($victima->tipo === "MORAL")
                        <?php $vicmor = 1; ?>
                    @endif
                    <td>{!! $victima->tipo !!}</td>
                @endforeach
                @if($vicfis == 1)
                    <div class="panel panel-default" > 
                        <div class="panel-heading panel-heading-custom">
                            <h3 class="panel-title" align="center">
                                Víctimas Físicas
                            </h3> 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Sexo</th>
                                            <th>Estado civil</th>
                                            <th>Dirección</th>
                                            <th>Etnia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proceso->victimas as $victima)
                                            @if($victima->tipo === "FISICA")
                                                <tr>
                                                    <td>{!! $victima->tipo !!}</td>
                                                    <td>{!! $victima->nombre !!}</td>
                                                    <td>{!! $victima->fechaNacimiento !!}</td>
                                                    <td>{!! $victima->sexo !!}</td>
                                                    <td>{!! $victima->estadoCivil !!}</td>
                                                    <td>{!! $victima->direccion !!}</td>
                                                    <td>{!! $victima->etnia !!}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                
                @if($vicmor == 1)
                    <div class="panel panel-default" > 
                        <div class="panel-heading panel-heading-custom">
                            <h3 class="panel-title" align="center">
                                Víctimas Morales
                            </h3> 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Representante legal</th>
                                            <th>Dirección</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proceso->victimas as $victima)
                                            @if($victima->tipo === "MORAL")
                                                <tr>
                                                    <td>{!! $victima->tipo !!}</td>
                                                    <td>{!! $victima->nombre !!}</td>
                                                    <td>{!! $victima->representanteLegal !!}</td>
                                                    <td>{!! $victima->direccion !!}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
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
            @empty($proceso->imputados)
                <h3 class="text-center">No hay imputados registrados.</h3>
            @else
                <?php $impmor = 0; $impfis = 0; ?>
                @foreach($proceso->imputados as $imputado)
                    @if($imputado->tipo === "FISICA")
                        <?php $impfis = 1; ?>
                    @endif
                    @if($imputado->tipo === "MORAL")
                        <?php $impmor = 1; ?>
                    @endif
                @endforeach
                @if($impfis == 1)
                    <div class="panel panel-default" > 
                        <div class="panel-heading panel-heading-custom">
                            <h3 class="panel-title" align="center">
                                Imputados Físicos
                            </h3> 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Alias</th>
                                            <th>Fecha nacimiento</th>
                                            <th>Sexo</th>
                                            <th>Estado civil</th>
                                            <th>Nombre padre</th>
                                            <th>Nombre madre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proceso->imputados as $imputado)
                                            @if($imputado->tipo === "FISICA")
                                                <tr>
                                                    <td>{!! $imputado->tipo !!}</td>
                                                    <td>{!! $imputado->nombre !!}</td>
                                                    <td>{!! $imputado->alias !!}</td>
                                                    <td>{!! $imputado->fechaNacimiento !!}</td>
                                                    <td>{!! $imputado->sexo !!}</td>
                                                    <td>{!! $imputado->estadoCivil !!}</td>
                                                    <td>{!! $imputado->nombrePadre !!}</td>
                                                    <td>{!! $imputado->nombreMadre !!}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

                @if($impmor == 1)
                    <div class="panel panel-default" > 
                        <div class="panel-heading panel-heading-custom">
                            <h3 class="panel-title" align="center">
                                Imputados Morales
                            </h3> 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Representante legal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proceso->imputados as $imputado)
                                            @if($imputado->tipo === "MORAL")
                                                <tr>
                                                    <td>{!! $imputado->tipo !!}</td>
                                                    <td>{!! $imputado->nombre !!}</td>
                                                    <td>{!! $imputado->representanteLegal !!}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
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
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Víctima</th>
                                    <th>Delito</th>
                                    <th>Imputado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proceso->imputaciones as $imputacion)
                                    <tr>
                                        <td>{!! $imputacion->victima !!}</td>
                                        <td>{!! $imputacion->delito !!}</td>
                                        <td>{!! $imputacion->imputado !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>