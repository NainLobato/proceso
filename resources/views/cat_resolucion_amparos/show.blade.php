@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Resolución de Amparos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_resolucion_amparos.show_fields')
                    <a href="{!! route('catResolucionAmparos.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
