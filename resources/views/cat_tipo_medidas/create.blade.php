@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Tipos Medidas
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catTipoMedidas.store']) !!}

                        @include('cat_tipo_medidas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
