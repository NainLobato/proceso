@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Delitos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catDelito, ['route' => ['catDelitos.update', $catDelito->id], 'method' => 'patch']) !!}

                        @include('cat_delitos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection