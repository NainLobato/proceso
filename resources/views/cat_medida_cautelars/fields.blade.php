<!-- Medidacautelar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidaCautelar', 'Medidacautelar:') !!}
    {!! Form::text('medidaCautelar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catMedidaCautelars.index') !!}" class="btn btn-default">Cancel</a>
</div>
