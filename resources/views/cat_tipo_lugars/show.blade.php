@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cat Tipo Lugar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_tipo_lugars.show_fields')
                    <a href="{!! route('catTipoLugars.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
