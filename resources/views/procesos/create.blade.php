@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proceso
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'procesos.store']) !!}
                        @include('procesos.fields')
                    {!! Form::close() !!}
 &nbsp;

                 <fieldset>
                    <legend>Victimas</legend>
                     <div class="form-group" > 
                        @include('victimas.fields2')
                    </div>
                </fieldset>

                 <fieldset>
                    <legend>Imputados</legend>
                     <div class="form-group" > 
                        @include('imputados.fields2')
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Imputaciones / Delitos</legend>
                    <div class="col-sm-offset-0 col-sm-3">
                        {!! Form::label('idVictimaImputacion', ' Victima:') !!}
                        {!! Form::select('idVictimaImputacion', $personas, null, ['class' => 'form-control']) !!}
                    </div>

                     <div class="col-sm-offset-0 col-sm-3">
                        {!! Form::label('idVictima', 'Delito Imputado:') !!}
                        {!! Form::select('idDelitoImputado', $delitos, null, ['class' => 'form-control']) !!}
                    </div>

                     <div class="col-sm-offset-0 col-sm-3">
                        {!! Form::label('idImputadoImputacion', 'Imputado:') !!}
                        {!! Form::select('idImputadoImputacion', $personas, null, ['class' => 'form-control']) !!}
                    </div>

                        <div class="relation-eleccion-fuente">
                                @foreach(array() as $selected)
                                    <div class="row eleccion-fuente" style="margin-bottom: 10px;">
                                        <input type="hidden" name="fuentes[]" value="{!! $selected->id !!}">
                                        <input type="hidden" name="titulos[]" value="{!! $selected->pivot['titulo'] !!}">
                                        <input type="hidden" name="links[]" value="{!! $selected->pivot['link'] !!}">
                                        <input type="hidden" name="fechas[]" value="{!! $selected->pivot['fecha'] !!}">
                                        <div class="col-sm-offset-2 col-sm-2">{!! $selected->nombre !!}</div>
                                        <div class="col-sm-3">{!! $selected->pivot['titulo'] !!}</div>
                                        <div class="col-sm-3">{!! $selected->pivot['link'] !!}</div>
                                        <div class="col-sm-1">{!! $selected->pivot['fecha'] !!}</div>
                                        <div class="col-sm=1 text-center">
                                            <i class="fa fa-times icon-red remove-eleccion-fuente"></i>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                </fieldset>
                    
                </div>
            </div>
        </div>

        
    </div>
@endsection

  
