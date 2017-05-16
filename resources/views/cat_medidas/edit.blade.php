@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Medida Cautelares y/o Protección
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catMedida, ['route' => ['catMedidas.update', $catMedida->id], 'method' => 'patch']) !!}

                        @include('cat_medidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection