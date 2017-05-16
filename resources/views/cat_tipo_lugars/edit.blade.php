@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Tipo Lugar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catTipoLugar, ['route' => ['catTipoLugars.update', $catTipoLugar->id], 'method' => 'patch']) !!}

                        @include('cat_tipo_lugars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection