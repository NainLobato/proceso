<!-- Username Field -->
<div class="form-group col-sm-2">
    {!! Form::label('username', 'Usuario:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-2">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-7">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Idunidad Field -->
<div class="form-group col-sm-5">
    {!! Form::label('idUnidad', 'Unidad:') !!}
    {!! Form::select('idUnidad', $unidad, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-5">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Field -->
<div class="form-group col-sm-1">
    {!! Form::label('level', 'Nivel:') !!}
    {!! Form::text('level', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombramiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombramiento', 'Nombramiento:') !!}
    {!! Form::text('nombramiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('direccions.index') !!}" class="btn btn-default">Cancel</a>
</div>