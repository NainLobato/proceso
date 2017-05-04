@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Resolucion Investigacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catResolucionInvestigacion, ['route' => ['catResolucionInvestigacions.update', $catResolucionInvestigacion->id], 'method' => 'patch']) !!}

                        @include('cat_resolucion_investigacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection