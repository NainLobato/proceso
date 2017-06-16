
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
 &nbsp;
 
                <!--<div id="divVictimas" style="display:none">-->
                  <fieldset>
                    <legend><a href="#divVictimas" data-toggle="collapse">Victimas</a></legend>
                    <div id="divVictimas">
                             <div class="form-group" > 
                                @include('victimas.fields2')
                            </div>
                       
                    </div>
                </fieldset>
                <!--<div id="divImputados" style="display:none">-->
                <fieldset>
                <legend><a href="#divImputados" data-toggle="collapse">Imputados</a></legend>
                    <div id="divImputados">
                        <fieldset>
                            <legend></legend>
                             <div class="form-group" > 
                                @include('imputados.fields2')
                            </div>
                    </div>
                </fieldset>

                
                <!--<div id="divImputaciones"  style="display:none">-->
                 <fieldset>
                        <legend><a href="#divImputaciones" data-toggle="collapse">Imputaciones/Delitos</a></legend>
                    <div id="divImputaciones">
                   
                        <div class="col-sm-offset-0 col-sm-3">
                            {!! Form::label('idVictimaImputacion', ' Victima:') !!}
                            {!! Form::select('idVictimaImputacion', array(), null, ['id'=>'idVictimaImputacion','class' => 'form-control']) !!}
                        </div>

                         <div class="col-sm-offset-0 col-sm-3">
                            {!! Form::label('idVictima', 'Delito Imputado:') !!}
                            {!! Form::select('idDelitoImputado', $delitos, null, ['id'=>'idDelitoImputado','class' => 'form-control']) !!}
                        </div>
                        <div class="col-sm-offset-0 col-sm-3">
                            {!! Form::label('idRelacionImputacion', 'Tipo De Relacion:') !!}
                            {!! Form::select('idRelacionImputacion', array('1'=>'a','2'=>'b','3'=>'c','4'=>'d'), null, ['id'=>'idRelacionImputacion','class' => 'form-control']) !!}
                        </div>
                         <div class="col-sm-offset-0 col-sm-3">
                            {!! Form::label('idImputadoImputacion', 'Imputado:') !!}
                            {!! Form::select('idImputadoImputacion',  array(), null, ['id'=>'idImputadoImputacion','class' => 'form-control']) !!}
                        </div>

                        <div class="col-sm-offset-0 col-sm-1">
                        <br>
                            <button type="button" class="btn btn-primary add-proceso-imputacion">Agregar Delito Imputado</button>
                        </div>

                        <div class="relation-proceso-imputacion">
                            @if (true or $action == '')
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
                 </fieldset>
                    
            </div>
        </div>
    </div>
    </div>
@endsection