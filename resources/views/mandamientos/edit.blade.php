@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mandamiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mandamiento, ['route' => ['mandamientos.update', $mandamiento->id], 'method' => 'patch']) !!}

                        @include('mandamientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection