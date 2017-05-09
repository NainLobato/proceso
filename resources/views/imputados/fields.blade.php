<!-- Idpersona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPersona', 'Idpersona:') !!}
    {!! Form::select('idPersona', $personas, null, ['class' => 'form-control']) !!}
</div>

<!-- Idproceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProceso', 'Idproceso:') !!}
    {!! Form::select('idProceso', $procesos, null, ['class' => 'form-control']) !!}
</div>

<!-- Iddireccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDireccion', 'Iddireccion:') !!}
    {!! Form::select('idDireccion', $direcciones, null, ['class' => 'form-control']) !!}
</div>

<!-- Esdetenido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esDetenido', 'Esdetenido:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('esDetenido', false) !!}
        {!! Form::checkbox('esDetenido', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imputados.index') !!}" class="btn btn-default">Cancel</a>
</div>
