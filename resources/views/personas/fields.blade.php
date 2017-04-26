<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paterno', 'Paterno:') !!}
    {!! Form::text('paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materno', 'Materno:') !!}
    {!! Form::text('materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Idetnia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEtnia', 'Idetnia:') !!}
    {!! Form::select('idEtnia', $idEtnia, null, ['class' => 'form-control']) !!}
</div>

<!-- Idescolaridad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEscolaridad', 'Idescolaridad:') !!}
    {!! Form::select('idEscolaridad', $idEscolaridad, null, ['class' => 'form-control']) !!}
</div>

<!-- Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('padre', 'Padre:') !!}
    {!! Form::text('padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Idreligion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idReligion', 'Idreligion:') !!}
    {!! Form::select('idReligion', $idReligion, null, ['class' => 'form-control']) !!}
</div>

<!-- Ine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ine', 'Ine:') !!}
    {!! Form::text('ine', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
