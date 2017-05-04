@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Medida Proteccion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catMedidaProteccions.store']) !!}

                        @include('cat_medida_proteccions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
