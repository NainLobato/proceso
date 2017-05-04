@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Fiscal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catFiscal, ['route' => ['catFiscals.update', $catFiscal->id], 'method' => 'patch']) !!}

                        @include('cat_fiscals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection