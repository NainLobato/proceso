<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divVictimas">Victimas</a>
        </h3> 
    </div> 
    
    <div id="divVictimas" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        {!! Form::open(['id' => 'frmVictimas']) !!}
        <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('idVictima', 'Nombre Victima:') !!}<br>
                {!! Form::select('idVictima', array(), null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idDireccion', 'Direccion:') !!}<br>
                {!! Form::select('idDireccionVictima', $direcciones, null, ['name'=>'idDireccionVictima','id'=>'idDireccionVictima','class' => 'form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}   

        <div class="col-md-3 col-xs-6">
            <div class="form-group">
                <br>
                <button type="button" class="btn btn-primary add-proceso-victima">Agregar Victima</button>
            </div>
        </div>
        
        <div class="col-md-3 col-xs-6">
            <div class="form-group">
                <br>
                <button type="button" data-href="/procesos/public/personas/createModal" class="btn btn-primary modal-persona" data-target="#myModal" data-toggle="modal"> Crear Victima </button>
            </div>
        </div>
    </div>
    
        <div class="relation-proceso-victima">
            @if ($action == 'editar')
                @foreach($selectedVictimas as $victima)
                    <div class="row row-proceso-victima" data-victima-id="{!! $victima->id !!}">
                        <input type="hidden" name="victimas[]" value="{!! $victima->id !!}">
                        
                        <div class="col-sm-10 col-xs-10">
                        <div class="form-group"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i> 
                            {!! $victima->nombre !!}
                        </div>
                        </div>
                        <div class="col-sm-2 col-xs-2 text-center">
                        <div class="form-group">
                            <i class="fa fa-times icon-red remove-proceso-victima"></i>
                        </div>
                        </div>
                    </div>
                @endforeach
            @endif
</div>
</div>
</div>
</div>
</div>