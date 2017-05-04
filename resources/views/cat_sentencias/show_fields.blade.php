<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $catSentencia->id !!}</p>
</div>

<!-- Sentencia Field -->
<div class="form-group">
    {!! Form::label('sentencia', 'Sentencia:') !!}
    <p>{!! $catSentencia->sentencia !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $catSentencia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $catSentencia->updated_at !!}</p>
</div>

