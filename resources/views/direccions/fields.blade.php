<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerointerior Field -->
<div class="form-group col-sm-2">
    {!! Form::label('numeroInterior', 'Numero Interior:') !!}
    {!! Form::text('numeroInterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Numeroexterior Field -->
<div class="form-group col-sm-2">
    {!! Form::label('numeroExterior', 'Numero Exterior:') !!}
    {!! Form::text('numeroExterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcodigo Field -->
<div class="form-group col-sm-2">
    {!! Form::label('idCodigo', 'Codigo Postal:') !!}
    {!! Form::select('idCodigo', $cp, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
</div>

<!-- Entrecalle1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreCalle1', 'Entre Calle:') !!}
    {!! Form::text('entreCalle1', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrecalle2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreCalle2', 'Y Calle:') !!}
    {!! Form::text('entreCalle2', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', 'Referencia:') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-3">
    {!! Form::label('idTipoLugar', 'Tipo de lugar:') !!}
    {!! Form::select('idTipoLugar', $CatTipoLugar, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('direccions.index') !!}" class="btn btn-default">Cancel</a>
</div>
