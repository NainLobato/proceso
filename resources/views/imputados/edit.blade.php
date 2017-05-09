@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Imputado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($imputado, ['route' => ['imputados.update', $imputado->id], 'method' => 'patch']) !!}

                        @include('imputados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection