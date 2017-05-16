<!-- Medidaproteccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidaProteccion', 'Medida de protección:') !!}
    {!! Form::text('medidaProteccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catMedidaProteccions.index') !!}" class="btn btn-default">Cancel</a>
</div>
