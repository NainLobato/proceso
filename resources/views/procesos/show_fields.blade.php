<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $proceso->id !!}</p>
</div>

<!-- Iduipj Field -->
<div class="form-group">
    {!! Form::label('idUIPJ', 'Iduipj:') !!}
    <p>{!! $proceso->carpeta->uipj !!}</p>
</div>

<!-- Aniocarpeta Field -->
<div class="form-group">
    {!! Form::label('anioCarpeta', 'Aniocarpeta:') !!}
    <p>{!! $proceso->carpeta->numero !!}</p>
</div>
<!--dsa-->
<!-- Numerocarpeta Field -->
<div class="form-group">
    {!! Form::label('numeroCarpeta', 'Numerocarpeta:') !!}
    <p>{!! $proceso->radicacion->numero !!}</p>
</div>

<!-- Fechainiciocarpeta Field -->
<div class="form-group">
    {!! Form::label('fechaInicioCarpeta', 'Fechainiciocarpeta:') !!}
    <p>{!! $proceso->carpeta->fecha !!}</p>
</div>

<!-- Idfiscal Field -->
<div class="form-group">
    {!! Form::label('idFiscal', 'Idfiscal:') !!}
    <p>{!! $proceso->carpeta->fiscal !!}</p>
</div>

<!-- Idjuez Field -->
<div class="form-group">
    {!! Form::label('idJuez', 'Idjuez:') !!}
    <p>{!! $proceso->radicacion->juez !!}</p>
</div>

<!-- Idjuzgado Field -->
<div class="form-group">
    {!! Form::label('idJuzgado', 'Idjuzgado:') !!}
    <p>{!! $proceso->Juzgado !!}</p>
</div>

<!-- Fecharadicacion Field -->
<div class="form-group">
    {!! Form::label('fechaRadicacion', 'Fecharadicacion:') !!}
    <p>{!! $proceso->fechaRadicacion !!}</p>
</div>

<!-- Condetenido Field -->
<div class="form-group">
    {!! Form::label('conDetenido', 'Condetenido:') !!}
    <p>{!! $proceso->conDetenido !!}</p>
</div>

<!-- Obsequiaorden Field -->
<div class="form-group">
    {!! Form::label('obsequiaOrden', 'Obsequiaorden:') !!}
    <p>{!! $proceso->obsequiaOrden !!}</p>
</div>

<!-- Fechaorden Field -->
<div class="form-group">
    {!! Form::label('fechaOrden', 'Fechaorden:') !!}
    <p>{!! $proceso->fechaOrden !!}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p>{!! $proceso->observaciones !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $proceso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $proceso->updated_at !!}</p>
</div>

