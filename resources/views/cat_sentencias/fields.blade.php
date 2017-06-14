<!-- Sentencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sentencia', 'Sentencia:') !!}
    {!! Form::text('sentencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catSentencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
