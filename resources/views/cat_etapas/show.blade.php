@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo Etapas Procesales
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_etapas.show_fields')
                    <a href="{!! route('catEtapas.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
