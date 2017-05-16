<!-- Jusgadofederal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jusgadofederal', 'Juzgado Federal:') !!}
    {!! Form::text('jusgadofederal', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catJuzgadoFeds.index') !!}" class="btn btn-default">Cancel</a>
</div>
