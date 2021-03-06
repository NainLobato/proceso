@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Estado Civil
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_edo_civils.show_fields')
                    <a href="{!! route('catEdoCivils.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
