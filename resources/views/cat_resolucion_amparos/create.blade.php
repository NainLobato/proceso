@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Resolucion Amparo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catResolucionAmparos.store']) !!}

                        @include('cat_resolucion_amparos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
