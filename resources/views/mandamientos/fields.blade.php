<!-- Idtipomandamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoMandamiento', 'Idtipomandamiento:') !!}
    {!! Form::select('idTipoMandamiento', $catTipoMandamiento, null, ['class' => 'form-control']) !!}
</div>

<!-- Idaudiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idAudiencia', 'Idaudiencia:') !!}
    {!! Form::select('idAudiencia', $audiencias, null, ['class' => 'form-control']) !!}
</div>

<!-- Numerooficio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroOficio', 'Numerooficio:') !!}
    {!! Form::text('numeroOficio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechaoficio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaOficio', 'Fechaoficio:') !!}
    {!! Form::date('fechaOficio', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombregrupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreGrupo', 'Nombregrupo:') !!}
    {!! Form::text('nombreGrupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecharecepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaRecepcion', 'Fecharecepcion:') !!}
    {!! Form::date('fechaRecepcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechaasignacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaAsignacion', 'Fechaasignacion:') !!}
    {!! Form::date('fechaAsignacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mandamientos.index') !!}" class="btn btn-default">Cancel</a>
</div>
