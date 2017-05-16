@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo Tipo de Mandamientos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catTipoMandos.store']) !!}

                        @include('cat_tipo_mandos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
