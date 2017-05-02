@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Juzgado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catJuzgado, ['route' => ['catJuzgados.update', $catJuzgado->id], 'method' => 'patch']) !!}

                        @include('cat_juzgados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection