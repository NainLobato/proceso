@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Medida Cautelares y/o Protección
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_medidas.show_fields')
                    <a href="{!! route('catMedidas.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
