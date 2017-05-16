@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catalogo de Juez
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catJuez, ['route' => ['catJuezs.update', $catJuez->id], 'method' => 'patch']) !!}

                        @include('cat_juezs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection