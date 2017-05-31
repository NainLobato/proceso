@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Avance
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($avance, ['route' => ['avances.update', $avance->id], 'method' => 'patch']) !!}

                        @include('avances.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection