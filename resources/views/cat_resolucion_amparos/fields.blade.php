<!-- Resolucionamparo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resolucionAmparo', 'Resolución Amparo:') !!}
    {!! Form::text('resolucionAmparo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catResolucionAmparos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
