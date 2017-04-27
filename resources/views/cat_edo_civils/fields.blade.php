<!-- Estadocivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadocivil', 'Estadocivil:') !!}
    {!! Form::text('estadocivil', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catEdoCivils.index') !!}" class="btn btn-default">Cancel</a>
</div>
