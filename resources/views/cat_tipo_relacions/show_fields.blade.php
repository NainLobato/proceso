<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $catTipoRelacion->id !!}</p>
</div>

<!-- Tiporelacion Field -->
<div class="form-group">
    {!! Form::label('tipoRelacion', 'Relación:') !!}
    <p>{!! $catTipoRelacion->tipoRelacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado por:') !!}
    <p>{!! $catTipoRelacion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado por:') !!}
    <p>{!! $catTipoRelacion->updated_at !!}</p>
</div>

