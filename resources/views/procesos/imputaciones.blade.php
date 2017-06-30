<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divImputaciones">Delitos Imputados</a>
        </h3>
    </div>
 <div id="divImputaciones" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idVictimaImputacion', ' Victima:') !!}
                {!! Form::select('idVictimaImputacion', $victimas, null, ['id'=>'idVictimaImputacion','placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idVictima', 'Delito Imputado:') !!}
                {!! Form::select('idDelitoImputado', $delitos, null,  ['id'=>'idDelitoImputado','placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idRelacionImputacion', 'Tipo De Relacion:') !!}
                {!! Form::select('idRelacionImputacion', $tiposRelacion, null, ['id'=>'idRelacionImputacion','placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idImputadoImputacion', 'Imputado:') !!}
                {!! Form::select('idImputadoImputacion',  $imputados, null, ['id'=>'idImputadoImputacion','placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-1 col-xs-3">
            <div class="form-group">
                <button type="button" class="btn btn-primary add-proceso-imputacion">Agregar Delito Imputado</button>
            </div>
        </div>
    </div>

        <div class="relation-proceso-imputacion">
            @if(true or $action == '')
                @foreach(array() as $imputacion)
                        <input type="hidden" name="victimasImputacion[]" value="{!! $victima->id !!}">
                        <input type="hidden" name="direccionesVictimas[]" value="{!! $victima->direccion()->id !!}">
                        <div class="row">
                            <div class="col-sm-10 col-xs-10">
                                <div class="form-group">
                                    {!! $victima->nombre . ' ' . $victima->paterno !!}
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-2 text-center">
                                <div class="form-group">
                                    <i class="fa fa-times icon-red remove-proceso-victima"></i>
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