<!-- Idpersona Field -->
<div class="col-sm-offset-0 col-sm-3">
    {!! Form::label('idImputado', 'Nombre Imputado:') !!}
    {!! Form::select('idImputado', $personas, null, ['class' => 'form-control']) !!}

    {!! Form::label('esDetenido', '¿Detenido?') !!}
    {!! Form::checkbox('esDetenido', '1', null) !!} 
</div>

<!-- Idproceso Field -->
    {!! Form::hidden('idProceso', 1, null, ['class' => 'form-control']) !!}
<!-- Iddireccion Field -->
<div class="col-sm-offset-1 col-sm-2">
    {!! Form::label('idDireccion', 'Direccion:') !!}
    {!! Form::select('idDireccionImputado', $direcciones, null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
        <div class="col-sm-offset-1 col-sm-2">
    {!! Form::submit('Agregar Imputado', ['class' => 'btn btn-primary']) !!}
</div>
