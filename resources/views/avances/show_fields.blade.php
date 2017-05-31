<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $avance->id !!}</p>
</div>

<!-- Idmandamiento Field -->
<div class="form-group">
    {!! Form::label('idMandamiento', 'Idmandamiento:') !!}
    <p>{!! $avance->idMandamiento !!}</p>
</div>

<!-- Fechaavance Field -->
<div class="form-group">
    {!! Form::label('fechaAvance', 'Fechaavance:') !!}
    <p>{!! $avance->fechaAvance !!}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p>{!! $avance->observaciones !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $avance->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $avance->updated_at !!}</p>
</div>

