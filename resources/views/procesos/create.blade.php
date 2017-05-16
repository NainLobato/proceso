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

                    
                </div>
            </div>
        </div>

        
    </div>
@endsection

  
