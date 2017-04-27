@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Juzgado Fed
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catJuzgadoFed, ['route' => ['catJuzgadoFeds.update', $catJuzgadoFed->id], 'method' => 'patch']) !!}

                        @include('cat_juzgado_feds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection