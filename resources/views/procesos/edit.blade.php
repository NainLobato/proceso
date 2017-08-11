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
                  <!--  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>-->
                </div>
            </div>
        </div>

        @include('adminlte-templates::common.errors')

        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($proceso, ['route' => ['procesos.update', $proceso->id], 'data-toggle'=>'validator', 'role'=>'form','id'=>'procesoForm','method' => 'patch']) !!}
                   @include('procesos.fields2')
                {!! Form::close() !!}
            </div>
        </div>
        @include('flash::message')
        @include('victimas.fields2')
        @include('imputados.fields2')
        @include('procesos.imputaciones')
        @include('audiencias.fields2')
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        
            $(function (){
                $('.calendarioCompleto').datepicker({
                        format: "dd/mm/yyyy",
                        startDate: "01/01/2000",
                        weekStart: 0,
                        //endDate: "today",
                        todayBtn: "linked",
                        language: "es",
                        orientation: "bottom auto",
                        multidate: false,
                        todayHighlight: true,
                        autoclose: true,
                });
            });

            $(function (){
                $('.calendarioAnio').datepicker({
                        format: "yyyy",
                        startDate: "2000",
                        weekStart: 0,
                        //endDate: "today",
                        language: "es",
                        orientation: "bottom auto",
                        multidate: false,
                        autoclose: true,
                        startView: 2,
                        minViewMode: 2,
                });
            });

        });

    </script>
@endsection
