<!-- Iduipj Field -->
 <fieldset>
    <legend>Carpeta Investigación</legend>
    <div class="row">       
            <div class="col-sm-offset-0 col-sm-1">
                <div class="form-group">
                    {!! Form::label('anioCarpeta', 'AÑO:') !!}*
                    {!! Form::number('anioCarpeta', null, ['class' => 'form-control','required'=>'','data-error'=>'Error en UIPJ']) !!}
                </div>
            </div>
            <div class="col-sm-offset-0 col-sm-1">
                <div class="form-group">
                    {!! Form::label('numeroCarpeta', 'NUMERO:') !!}*
                    {!! Form::text('numeroCarpeta', null, ['class' => 'form-control','required'=>'','data-error'=>'Error en UIPJ']) !!}
                </div>
            </div>

             <div class="col-sm-offset-0 col-sm-3">
                {!! Form::label('idUIPJ', 'UIPJ:') !!}*
                {!! Form::select('idUIPJ', $unidades, null, ['placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'','data-error'=>'Error en UIPJ']) !!}

            </div>

            <div class="col-sm-offset-0 col-sm-3">
            {!! Form::label('idFiscal', 'FISCAL') !!}*
            {!! Form::select('idFiscal', $fiscales, 'null', ['placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'']) !!}

        </div>

            <div class="col-sm-offset-0 col-sm-2">
                {!! Form::label('fechaInicioCarpeta', 'FECHA INICIO:') !!}*
                {!! Form::date('fechaInicioCarpeta', null, ['class' => 'form-control','required'=>'']) !!}
            </div>
        </div>
    </div>    
</fieldset>
 <fieldset class="form-group" >
    <legend>Radicación-Proceso</legend>
 </fieldset>
 <div class="form-group" > 
    <div class="row">
        <div class="col-sm-offset-0 col-sm-1">
            {!! Form::label('anioProceso', 'AÑO:') !!}*
            {!! Form::number('anioProceso', null, ['class' => 'form-control','required'=>'']) !!}
        </div>
        <div class="col-sm-offset-0 col-sm-1">
            {!! Form::label('numeroProceso', 'NUMERO:') !!}*
            {!! Form::text('numeroProceso', null, ['class' => 'form-control','required'=>'']) !!}
        </div>
        
        <div class="col-sm-offset-0 col-sm-3">
            {!! Form::label('idJuez', 'JUEZ:') !!}*
            {!! Form::select('idJuez', $jueces, null, ['placeholder' => 'Seleccionar...','id'=>'idJuez','class' => 'form-control','required'=>'']) !!}

        </div>
        
        <div class="col-sm-offset-0 col-sm-3">
            {!! Form::label('Juzgado', 'JUZGADO:') !!}*
            {!! Form::select('idJuzgado', $juzgados, null, ['placeholder' => 'Seleccionar...','id'=>'idJuzgado','class' => 'form-control','required'=>'']) !!}
        </div>

        <div class="col-sm-offset-0 col-sm-2">
            {!! Form::label('fechaRadicacion', 'FECHA RADICACION:') !!}*
            {!! Form::date('fechaRadicacion', null, ['class' => 'form-control','required'=>'']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-0 col-sm-11">
            {!! Form::label('observaciones', 'OBSERVACIONES:') !!}
            {!! Form::textarea('observaciones', null, ['rows'=>'4','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-0 col-sm-1">
                {!! Form::label('conDetenido', '¿CON DETENIDO?:') !!}<br>
                {!! Form::hidden('conDetenido', false) !!}
                {!! Form::checkbox('conDetenido', '1', null) !!} 
        </div>

        <div class="col-sm-offset-0 col-sm-1">
                {!! Form::label('obsequiaOrden', '¿ORDEN OBSEQUIADA?:') !!}<br>
                {!! Form::hidden('obsequiaOrden', false) !!}
                {!! Form::checkbox('obsequiaOrden', '1', null) !!} 
        </div>

        <div class="col-sm-offset-0 col-sm-2">
               {!! Form::label('fechaOrden', 'FECHA ORDEN:') !!}
               {!! Form::date('fechaOrden', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<br>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['id'=>'submitProceso' ,'class' => 'btn btn-primary']) !!}
    <a href="{!! route('procesos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
    {!! Form::hidden('idProceso', null, ['id'=>'idProceso','class' => 'form-control']) !!}

<div id="ajaxResponse">
<!-- Idproceso Field -->
</div>
