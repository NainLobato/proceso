<!-- Etnia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etnia', 'Etnia:') !!}
    {!! Form::text('etnia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catEtnias.index') !!}" class="btn btn-default">Cancelar</a>
</div>
