@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Medida Proteccion
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_medida_proteccions.show_fields')
                    <a href="{!! route('catMedidaProteccions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
