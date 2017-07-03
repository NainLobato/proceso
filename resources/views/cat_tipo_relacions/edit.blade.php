@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catalogo de Tipo Relación
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catTipoRelacion, ['route' => ['catTipoRelacions.update', $catTipoRelacion->id], 'method' => 'patch']) !!}

                        @include('cat_tipo_relacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection