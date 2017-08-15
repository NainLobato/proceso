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
                </div>
            </div>
        </div>

        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'procesos.store','data-toggle'=>'validator', 'role'=>'form','id'=>'procesoForm']) !!}
                    @include('procesos.fields2')
                {!! Form::close() !!}
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        
            $(function (){
                $('.calendarioCompleto').datepicker({
                        format: "dd/mm/yyyy",
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

            $(function (){
                $('.anioCarp').datepicker({
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
                }).on('hide', function(e) {
                    var anio1 = $('.anioCarp').datepicker('getDate');
                    $('.anioProc').datepicker('setStartDate', anio1);
                    $('.anioProc').datepicker('setDate', anio1);
                });
            });

            $(function (){
                $('.anioProc').datepicker({
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