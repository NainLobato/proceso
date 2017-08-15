@extends('layouts.app')

@section('content')
    <section class="content-header">
        <img class="img-responsive" src="{{ asset('img/logo.png') }}">
    </section>
    <div class="content">
    
        <div class="panel panel-primary"> 
        <div class="panel-heading"> 
            <h3 class="panel-title">Proceso</h3> 
        </div> 
        <div class="panel-body"> 
            <!--<div class="box box-primary">-->
                <div class="box-body">
                    <div class="row" style="padding-left: 0px">
                        @include('procesos.show_fields')
                        <a href="{!! route('procesos.index') !!}" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            <!--</div>-->
        </div>
        </div> 
    </div>
@endsection
