@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Juzgados
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'catJuzgados.store']) !!}

                        @include('cat_juzgados.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
