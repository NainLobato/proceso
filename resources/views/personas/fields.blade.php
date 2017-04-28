<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paterno', 'Primer Apellido:') !!}
    {!! Form::text('paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materno', 'Segundo Apellido:') !!}
    {!! Form::text('materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FechaNacimiento', 'Fecha De Nacimiento:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', array('NO ESPECIFICADO'=>'NO ESPECIFICADO','MASCULINO'=>'MASCULINO','FEMENINO'=>'FEMENINO'), ['class' => 'form-control']) !!}
</div>

<!-- Idetnia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Etnia', 'Etnia:') !!}
    {!! Form::select('idEtnia', $catEtnia, null, ['class' => 'form-control']) !!}
</div>

<!-- Idescolaridad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Escolaridad', 'Escolaridad:') !!}
    {!! Form::select('idEscolaridad', $catEscolaridad, null, ['class' => 'form-control']) !!}
</div>

<!-- Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('padre', 'Padre:') !!}
    {!! Form::text('padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('madre', 'Madre:') !!}
    {!! Form::text('madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Idreligion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idReligion', 'Religion:') !!}
    {!! Form::select('idReligion', $catReligion, null, ['class' => 'form-control']) !!}
</div>

<!-- IdNacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idNacionalidad', 'Nacionalidad:') !!}
    {!! Form::select('idNacionalidad', $catNacionalidad, null, ['class' => 'form-control']) !!}
</div>

<!-- IdEstadoCivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEstadoCivil', 'Estado Civil:') !!}
    {!! Form::select('idEstadoCivil', $catEdoCivil, null, ['class' => 'form-control']) !!}
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
<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curp', 'CURP:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
