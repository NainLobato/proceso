
<!-- Etapa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etapa', 'Etapa Procesal:') !!}
    {!! Form::text('etapa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catEtapas.index') !!}" class="btn btn-default">Cancelar</a>
</div>


