@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Sentencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catSentencia, ['route' => ['catSentencias.update', $catSentencia->id], 'method' => 'patch']) !!}

                        @include('cat_sentencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection