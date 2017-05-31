<!-- Idmandamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMandamiento', 'Idmandamiento:') !!}
    {!! Form::select('idMandamiento', array(), null, ['class' => 'form-control']) !!}
</div>

<!-- Fechaavance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaAvance', 'Fechaavance:') !!}
    {!! Form::date('fechaAvance', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('avances.index') !!}" class="btn btn-default">Cancel</a>
</div>
