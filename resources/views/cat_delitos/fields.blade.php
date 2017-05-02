<!-- Delito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delito', 'Delito:') !!}
    {!! Form::text('delito', null, ['class' => 'form-control']) !!}
</div>

<!-- Idagrupacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAgrupacion', 'Idagrupacion:') !!}
    {!! Form::select('idAgrupacion', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Ndelnum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ndelnum', 'Ndelnum:') !!}
    {!! Form::text('ndelnum', null, ['class' => 'form-control']) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::text('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activo', false) !!}
        {!! Form::checkbox('activo', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catDelitos.index') !!}" class="btn btn-default">Cancel</a>
</div>
