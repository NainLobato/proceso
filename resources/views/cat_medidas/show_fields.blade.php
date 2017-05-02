<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $catMedida->id !!}</p>
</div>

<!-- Medida Field -->
<div class="form-group">
    {!! Form::label('Medida', 'Medida:') !!}
    <p>{!! $catMedida->Medida !!}</p>
</div>

<!-- Idtipomedida Field -->
<div class="form-group">
    {!! Form::label('IdTipoMedida', 'Idtipomedida:') !!}
    <p>{!! $catMedida->IdTipoMedida !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $catMedida->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $catMedida->updated_at !!}</p>
</div>

