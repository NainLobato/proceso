<!-- Tipolugar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoLugar', 'Tipolugar:') !!}
    {!! Form::text('tipoLugar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoLugars.index') !!}" class="btn btn-default">Cancel</a>
</div>
