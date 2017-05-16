@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo Tipo de Mandamientos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catTipoMando, ['route' => ['catTipoMandos.update', $catTipoMando->id], 'method' => 'patch']) !!}

                        @include('cat_tipo_mandos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection