@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo Tipo de Mandamientos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_tipo_mandos.show_fields')
                    <a href="{!! route('catTipoMandos.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
