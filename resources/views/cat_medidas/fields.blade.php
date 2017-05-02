<!-- Medida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Medida', 'Medida:') !!}
    {!! Form::text('Medida', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtipomedida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IdTipoMedida', 'Idtipomedida:') !!}
    {!! Form::select('IdTipoMedida', array(1=>1), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catMedidas.index') !!}" class="btn btn-default">Cancel</a>
</div>
