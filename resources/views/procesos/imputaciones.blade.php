<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divImputaciones">Delitos Imputados</a>
        </h3>
    </div>

 <div id="divImputaciones" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    {!! Form::open(['route' => 'procesos.saveImputacion','data-toggle'=>'validator', 'role'=>'form','id'=>'imputacionForm']) !!}
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="form-group">
                {!! Form::label('idVictimaImputacion', ' Victima:') !!}
                {!! Form::select('idVictimaImputacion', $victimas, null, ['id'=>'idVictimaImputacion','placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'','data-error'=>'Error al colocar el año']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="form-group">
                {!! Form::label('idVictima', 'Delito Imputado:') !!}
                {!! Form::select('idDelitoImputado', $delitos, null,  ['id'=>'idDelitoImputado','placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'','data-error'=>'Debe seleccionar un delito']) !!}
            </div>
        </div>
        <div class="clearfix visible-md"></div>

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="form-group">
                {!! Form::label('idRelacionImputacion', 'Tipo De Relacion:') !!}
                {!! Form::select('idRelacionImputacion', $tiposRelacion, null, ['id'=>'idRelacionImputacion','placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="form-group">
                {!! Form::label('idImputadoImputacion', 'Imputado:') !!}
                {!! Form::select('idImputadoImputacion',  $imputados, null, ['id'=>'idImputadoImputacion','placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'','data-error'=>'Debe seleccionar un delito']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-md-2 ">
            <div class="form-group">
                <button type="button" class="btn btn-primary add-proceso-imputacion">Agregar Delito Imputado</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

        <div class="relation-proceso-imputacion">
            @if ($action == 'editar')
                @foreach($imputaciones as $imputacion)
                    <div class="row proceso-imputacion" data-imputacion-id="{!! $imputacion->id !!}">
                        <input type="hidden" name="victimasImputacion[]" value="{!! $imputacion->idVictima !!}">
                        <input type="hidden" name="imputadosImputacion[]" value="{!! $imputacion->idImputado !!}">
                        <input type="hidden" name="delitosImputacion[]" value="{!! $imputacion->idDelito !!}">
                        <div class="col-xs-3">
                            <div class="form-group"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                                {!! $imputacion->nombreVictima !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i>
                                {!! $imputacion->delito !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group"><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i>
                                {!! $imputacion->nombreImputado !!}
                            </div>
                        </div>
                        <div class="col-xs-1 text-center">
                            <div class="form-group">
                                <i class="fa fa-times icon-red remove-proceso-imputacion"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    </div>
    </div>
    </div>