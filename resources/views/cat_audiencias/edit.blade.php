@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Audiencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catAudiencia, ['route' => ['catAudiencias.update', $catAudiencia->id], 'method' => 'patch']) !!}

                        @include('cat_audiencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection