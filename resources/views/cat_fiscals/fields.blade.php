<!-- Fiscal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fiscal', 'Fiscal:') !!}
    {!! Form::text('fiscal', null, ['class' => 'form-control']) !!}
</div>

<!-- Idunidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUnidad', 'Idunidad:') !!}
    {!! Form::select('idUnidad', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Nombramiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombramiento', 'Nombramiento:') !!}
    {!! Form::text('nombramiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catFiscals.index') !!}" class="btn btn-default">Cancel</a>
</div>
