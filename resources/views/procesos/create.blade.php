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
                <div class="row">
                    {!! Form::open(['route' => 'procesos.store','data-toggle'=>'validator', 'role'=>'form','id'=>'procesoForm']) !!}
                        @include('procesos.fields2')
                    {!! Form::close() !!}
                 </div>
            </div>
        </div>


       

@endsection