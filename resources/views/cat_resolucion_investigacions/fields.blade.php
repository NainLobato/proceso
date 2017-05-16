<!-- Resolucioninvestigacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ResolucionInvestigacion', 'Resolución de Investigacion:') !!}
    {!! Form::text('ResolucionInvestigacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guadar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catResolucionInvestigacions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
