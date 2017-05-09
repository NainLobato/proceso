<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $imputado->id !!}</p>
</div>

<!-- Idpersona Field -->
<div class="form-group">
    {!! Form::label('idPersona', 'Idpersona:') !!}
    <p>{!! $imputado->idPersona !!}</p>
</div>

<!-- Idproceso Field -->
<div class="form-group">
    {!! Form::label('idProceso', 'Idproceso:') !!}
    <p>{!! $imputado->idProceso !!}</p>
</div>

<!-- Iddireccion Field -->
<div class="form-group">
    {!! Form::label('idDireccion', 'Iddireccion:') !!}
    <p>{!! $imputado->idDireccion !!}</p>
</div>

<!-- Esdetenido Field -->
<div class="form-group">
    {!! Form::label('esDetenido', 'Esdetenido:') !!}
    <p>{!! $imputado->esDetenido !!}</p>
</div>

<!-- Fechadetencion Field -->
<div class="form-group">
    {!! Form::label('fechaDetencion', 'Fechadetencion:') !!}
    <p>{!! $imputado->fechaDetencion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $imputado->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $imputado->updated_at !!}</p>
</div>

