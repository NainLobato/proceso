<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paterno', 'PRIMER APELLIDO:') !!}
    {!! Form::text('paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materno', 'SEGUNDO APELLIDO:') !!}
    {!! Form::text('materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'ALIAS:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FechaNacimiento', 'FECHA DE NACIMIENTO:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'SEXO:') !!}
    {!! Form::select('sexo', array('NO ESPECIFICADO'=>'NO ESPECIFICADO','MASCULINO'=>'MASCULINO','FEMENINO'=>'FEMENINO'), ['class' => 'form-control']) !!}
</div>

<!-- Idetnia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Etnia', 'ETNIA:') !!}
    {!! Form::select('idEtnia', $catEtnia, null, ['class' => 'form-control']) !!}
</div>

<!-- Idescolaridad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Escolaridad', 'ESCOLARIDAD:') !!}
    {!! Form::select('idEscolaridad', $catEscolaridad, null, ['class' => 'form-control']) !!}
</div>

<!-- Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('padre', 'PADRE:') !!}
    {!! Form::text('padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('madre', 'MADRE:') !!}
    {!! Form::text('madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Idreligion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idReligion', 'RELIGION:') !!}
    {!! Form::select('idReligion', $catReligion, null, ['class' => 'form-control']) !!}
</div>

<!-- IdNacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idNacionalidad', 'NACIONALIDAD:') !!}
    {!! Form::select('idNacionalidad', $catNacionalidad, null, ['class' => 'form-control']) !!}
</div>

<!-- IdEstadoCivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEstadoCivil', 'ESTADO CIVIL:') !!}
    {!! Form::select('idEstadoCivil', $catEdoCivil, null, ['class' => 'form-control']) !!}
</div>

<!-- Ine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ine', 'INE:') !!}
    {!! Form::text('ine', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>
<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curp', 'CURP:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
