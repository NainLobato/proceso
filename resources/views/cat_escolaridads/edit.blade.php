@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Escolaridad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catEscolaridad, ['route' => ['catEscolaridads.update', $catEscolaridad->id], 'method' => 'patch']) !!}

                        @include('cat_escolaridads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection