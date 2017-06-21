@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($persona, ['route' => ['personas.update', $persona->id], 'method' => 'patch']) !!}

                        @include('personas.fields', ['action' => 'Actualizar'])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection