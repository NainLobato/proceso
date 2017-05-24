<div class="form-group col-sm-12">
    <div class="col-sm-offset-0 col-sm-5">
            {!! Form::label('resEmpresa', '¿ES PERSONA FISICA?:') !!}
            {!! Form::radio('esEmpresa', '0', true) !!} 
    </div>
    <div class="col-sm-offset-1 col-sm-5">
            {!! Form::label('resEmpresa', '¿ES PERSONA MORAL (EMPRESA)?:') !!}
            {!! Form::radio('esEmpresa', '1', null) !!} 
    </div>
</div>
    <br>
    <!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div id="datosPersonasFisicas">
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
        {!! Form::select('sexo', array('SE DESCONOCE'=>'SE DESCONOCE','MASCULINO'=>'MASCULINO','FEMENINO'=>'FEMENINO'), ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
    </div>

    <!-- Idetnia Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Etnia', 'ETNIA:') !!}
        {!! Form::select('idEtnia', $catEtnia, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
    </div>

    <!-- Idescolaridad Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Escolaridad', 'ESCOLARIDAD:') !!}
        {!! Form::select('idEscolaridad',  $catEscolaridad, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
    </div>

    <!-- Padre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nombrePadre', 'NOMBRE DEL PADRE:') !!}
        {!! Form::text('nombrePadre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('primerApellidoPadre', 'PRIMER APELLIDO DEL PADRE:') !!}
        {!! Form::text('primerApellidoPadre', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Madre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('segundoApellidoPadre', 'SEGUNDO APELLIDO DEL PADRE:') !!}
        {!! Form::text('segundoApellidoPadre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('nombreMadre', 'NOMBRE DE LA MADRE:') !!}
        {!! Form::text('nombreMadre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('primerApellidoMadre', 'PRIMER APELLIDO DE LA MADRE:') !!}
        {!! Form::text('primerApellidoMadre', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Madre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('segundoApellidoMadre', 'SEGUNDO APELLIDO DE LA MADRE:') !!}
        {!! Form::text('segundoApellidoMadre', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Idreligion Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('idReligion', 'RELIGION:') !!}
        {!! Form::select('idReligion', $catReligion, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
    </div>

    <!-- IdNacionalidad Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('idNacionalidad', 'NACIONALIDAD:') !!}
        {!! Form::select('idNacionalidad', $catNacionalidad, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
    </div>

    <!-- IdEstadoCivil Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('idEstadoCivil', 'ESTADO CIVIL:') !!}
        {!! Form::select('idEstadoCivil', $catEdoCivil, null, ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
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
</div>

<div id="datosPersonasMorales">
    <div class="form-group col-sm-6">
        {!! Form::label('representante', 'REPRESENTANTE LEGAL:') !!}
        {!! Form::text('representante', null, ['class' => 'form-control']) !!}
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
