@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Tipo Medida
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catTipoMedida, ['route' => ['catTipoMedidas.update', $catTipoMedida->id], 'method' => 'patch']) !!}

                        @include('cat_tipo_medidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection