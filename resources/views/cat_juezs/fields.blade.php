<!-- Juez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juez', 'Juez:') !!}
    {!! Form::text('juez', null, ['class' => 'form-control']) !!}
</div>

<!-- Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juzgado', 'Juzgado:') !!}
    {!! Form::text('juzgado', null, ['class' => 'form-control']) !!}
</div>

<!-- Juzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distrito', 'Distrito:') !!}
    {!! Form::text('distrito', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catJuezs.index') !!}" class="btn btn-default">Cancel</a>
</div>
