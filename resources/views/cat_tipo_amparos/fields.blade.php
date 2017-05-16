<!-- Tipoamparo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoAmparo', 'Tipo Amparo:') !!}
    {!! Form::text('tipoAmparo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoAmparos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
