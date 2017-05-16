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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('victimas.index') !!}" class="btn btn-default">Cancel</a>
</div>
