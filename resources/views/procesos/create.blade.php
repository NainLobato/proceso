@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Proceso
        </h1>
    </section>

    <div class="content">
        <div id="modalPersona" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Crear Persona</h4>
                    </div>
                    <div class="modal-body">
                        <p>Cargando...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'procesos.store','data-toggle'=>'validator', 'role'=>'form','id'=>'procesoForm']) !!}
                        @include('procesos.fields2')
                    {!! Form::close() !!}
                 </div>
            </div>
        </div>
            @include('victimas.fields2')
            @include('imputados.fields2')
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
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                {!! Form::label('idVictimaImputacion', ' Victima:') !!}
                {!! Form::select('idVictimaImputacion', array(), null, ['id'=>'idVictimaImputacion','class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                {!! Form::label('idVictima', 'Delito Imputado:') !!}
                {!! Form::select('idDelitoImputado', $delitos, null, ['id'=>'idDelitoImputado','class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                {!! Form::label('idRelacionImputacion', 'Tipo De Relacion:') !!}
                {!! Form::select('idRelacionImputacion', array('1'=>'a','2'=>'b','3'=>'c','4'=>'d'), null, ['id'=>'idRelacionImputacion','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                {!! Form::label('idImputadoImputacion', 'Imputado:') !!}
                {!! Form::select('idImputadoImputacion',  array(), null, ['id'=>'idImputadoImputacion','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-1 col-xs-1">
            <div class="form-group">
                <button type="button" class="btn btn-primary add-proceso-imputacion">Agregar Delito Imputado</button>
            </div>
        </div>

        <div class="relation-proceso-imputacion">
            @if(true or $action == '')
                @foreach(array() as $imputacion)
                    <div class="row row-proceso-imputacion" style="margin-bottom: 10px;">
                        <input type="hidden" name="victimasImputacion[]" value="{!! $victima->id !!}">
                        <input type="hidden" name="direccionesVictimas[]" value="{!! $victima->direccion()->id !!}">
                        <div class="col-sm-offset-2 col-sm-5">{!! $victima->nombre . ' ' . $victima->paterno !!}</div>
                        <div class="col-sm-4">{!! $victima->direccion()->id !!}</div>
                        <div class="col-sm-1 text-center">
                            <i class="fa fa-times icon-red remove-proceso-victima"></i>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection