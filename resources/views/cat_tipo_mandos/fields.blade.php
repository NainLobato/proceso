<!-- Mandamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mandamiento', 'Mandamiento:') !!}
    {!! Form::text('mandamiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoMandos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
