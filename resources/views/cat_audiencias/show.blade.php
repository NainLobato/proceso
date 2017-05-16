@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Audiencias
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_audiencias.show_fields')
                    <a href="{!! route('catAudiencias.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
