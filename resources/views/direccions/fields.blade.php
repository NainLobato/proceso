<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerointerior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroInterior', 'Numerointerior:') !!}
    {!! Form::text('numeroInterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Numeroexterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroExterior', 'Numeroexterior:') !!}
    {!! Form::text('numeroExterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcodigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCodigo', 'Idcodigo:') !!}
    {!! Form::select('idCodigo', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Entrecalle1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreCalle1', 'Entrecalle1:') !!}
    {!! Form::text('entreCalle1', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrecalle2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entreCalle2', 'Entrecalle2:') !!}
    {!! Form::text('entreCalle2', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', 'Referencia:') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('direccions.index') !!}" class="btn btn-default">Cancel</a>
</div>
