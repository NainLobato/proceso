@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo Etapas Procesales
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catEtapa, ['route' => ['catEtapas.update', $catEtapa->id], 'method' => 'patch']) !!}

                        @include('cat_etapas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection