@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catálogo de Etnias
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cat_etnias.show_fields')
                    <a href="{!! route('catEtnias.index') !!}" class="btn btn-default">Regresa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
