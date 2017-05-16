<!-- Estadocivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadocivil', 'Estado civil:') !!}
    {!! Form::text('estadocivil', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catEdoCivils.index') !!}" class="btn btn-default">Cancelar</a>
</div>
