<!-- Iduipj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUIPJ', 'Iduipj:') !!}
    {!! Form::select('idUIPJ', $unidades, null, ['class' => 'form-control']) !!}
</div>

<!-- Aniocarpeta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anioCarpeta', 'Aniocarpeta:') !!}
    {!! Form::number('anioCarpeta', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerocarpeta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroCarpeta', 'Numerocarpeta:') !!}
    {!! Form::text('numeroCarpeta', null, ['class' => 'form-control']) !!}
</div>

<!-- Anioproceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anioProceso', 'Anioproceso:') !!}
    {!! Form::number('anioProceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Numeroproceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroProceso', 'Numeroproceso:') !!}
    {!! Form::text('numeroProceso', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainiciocarpeta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaInicioCarpeta', 'Fechainiciocarpeta:') !!}
    {!! Form::date('fechaInicioCarpeta', null, ['class' => 'form-control']) !!}
</div>

<!-- Idfiscal Field -->
 <div class="col-sm-6">
    {!! Form::label('idFiscal', 'Fiscal') !!}
    {!! Form::select('idFiscal', $fiscales, 'null', ['class' => 'form-control']) !!}

</div>

<!-- Idjuez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idJuez', 'Juez:') !!}
    {!! Form::select('idJuez', $jueces, null, ['class' => 'form-control']) !!}
</div>

<!-- Idjuzgado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Juzgado', 'Juzgado:') !!}
    {!! Form::select('idJuzgado', $juzgados, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecharadicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaRadicacion', 'Fecharadicacion:') !!}
    {!! Form::date('fechaRadicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Condetenido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conDetenido', 'Condetenido:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('conDetenido', false) !!}
        {!! Form::checkbox('conDetenido', '1', null) !!} 1
    </label>
</div>

<!-- Obsequiaorden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obsequiaOrden', 'Obsequiaorden:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('obsequiaOrden', false) !!}
        {!! Form::checkbox('obsequiaOrden', '1', null) !!} 1
    </label>
</div>

<!-- Fechaorden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaOrden', 'Fechaorden:') !!}
    {!! Form::date('fechaOrden', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('procesos.index') !!}" class="btn btn-default">Cancel</a>
</div>
