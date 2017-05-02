<!-- Tipomedida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipomedida', 'Tipomedida:') !!}
    {!! Form::text('Tipomedida', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoMedidas.index') !!}" class="btn btn-default">Cancel</a>
</div>
