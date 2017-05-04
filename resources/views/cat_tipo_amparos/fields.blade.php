<!-- Tipoamparo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoAmparo', 'Tipoamparo:') !!}
    {!! Form::text('tipoAmparo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoAmparos.index') !!}" class="btn btn-default">Cancel</a>
</div>
