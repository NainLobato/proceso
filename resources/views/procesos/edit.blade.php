@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proceso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($proceso, ['route' => ['procesos.update', $proceso->id], 'method' => 'patch']) !!}

                        @include('procesos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection