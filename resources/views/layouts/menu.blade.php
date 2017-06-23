<li class="header">Navegación principal</li>
<!-- Optionally, you can add icons to the links -->
<li class="single-item" id="sidebarDashboard"><a href="{{ URL::to('home') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>


<li class="treeview" id="sidebarCatalog">
	<a href="#">
    	<i class="fa fa-users"></i>
        	<span>Catalogos</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
	<ul class="treeview-menu">
        <li class="{{ Request::is('catAudiencias*') ? 'active' : '' }}">
            <a href="{!! route('catAudiencias.index') !!}"><i class="fa fa-edit"></i><span>Audiencias</span></a>
        </li>

        <li class="{{ Request::is('direccions*') ? 'active' : '' }}">
            <a href="{!! route('direccions.index') !!}"><i class="fa fa-edit"></i><span>Domicilios</span></a>
        </li>
        
        <li class="{{ Request::is('catDelitos*') ? 'active' : '' }}">
            <a href="{!! route('catDelitos.index') !!}"><i class="fa fa-edit"></i><span>Delitos</span></a>
        </li>

        <li class="{{ Request::is('catAgrupacions*') ? 'active' : '' }}">
            <a href="{!! route('catAgrupacions.index') !!}"><i class="fa fa-edit"></i><span>Agrupaciones Delitos</span></a>
        </li>

         <li class="{{ Request::is('catEscolaridads*') ? 'active' : '' }}">
            <a href="{!! route('catEscolaridads.index') !!}"><i class="fa fa-edit"></i><span>Escolaridad</span></a>
        </li>

        <li class="{{ Request::is('catEdoCivils*') ? 'active' : '' }}">
            <a href="{!! route('catEdoCivils.index') !!}"><i class="fa fa-edit"></i><span>Estado Civil</span></a>
        </li>
        
        <li class="{{ Request::is('catEtapas*') ? 'active' : '' }}">
            <a href="{!! route('catEtapas.index') !!}"><i class="fa fa-edit"></i><span>Etapas del Proceso Penal</span></a>
        </li>

        <li class="{{ Request::is('catEtnias*') ? 'active' : '' }}">
			<a href="{!! route('catEtnias.index') !!}"><i class="fa fa-edit"></i><span>Etnias</span></a>
		</li>

        <li class="{{ Request::is('catFiscals*') ? 'active' : '' }}">
            <a href="{!! route('catFiscals.index') !!}"><i class="fa fa-edit"></i><span>Fiscales</span></a>
        </li>

        <li class="{{ Request::is('catJuezs*') ? 'active' : '' }}">
            <a href="{!! route('catJuezs.index') !!}"><i class="fa fa-edit"></i><span>Jueces</span></a>
        </li>

        <li class="{{ Request::is('catJuzgadoFeds*') ? 'active' : '' }}">
            <a href="{!! route('catJuzgadoFeds.index') !!}"><i class="fa fa-edit"></i><span>Juzgado</span></a>
        </li>

        <li class="{{ Request::is('catJuzgados*') ? 'active' : '' }}">
            <a href="{!! route('catJuzgados.index') !!}"><i class="fa fa-edit"></i><span>Juzgados de Distrito</span></a>
        </li>

        <li class="{{ Request::is('catMedidas*') ? 'active' : '' }}">
            <a href="{!! route('catMedidas.index') !!}"><i class="fa fa-edit"></i><span>Medidas Cautelares</span></a>
        </li>
        
        <li class="{{ Request::is('catMedidaCautelars*') ? 'active' : '' }}">
            <a href="{!! route('catMedidaCautelars.index') !!}"><i class="fa fa-edit"></i><span>Medida Cautelar</span></a>
        </li>

        <li class="{{ Request::is('catMedidaProteccions*') ? 'active' : '' }}">
            <a href="{!! route('catMedidaProteccions.index') !!}"><i class="fa fa-edit"></i><span>Medida de Proteccion</span></a>
        </li>

        <li class="{{ Request::is('catNacionalidads*') ? 'active' : '' }}">
            <a href="{!! route('catNacionalidads.index') !!}"><i class="fa fa-edit"></i><span>Nacionalidad</span></a>
        </li>		
        
		<li class="{{ Request::is('catReligions*') ? 'active' : '' }}">
		    <a href="{!! route('catReligions.index') !!}"><i class="fa fa-edit"></i><span>Religion</span></a>
        </li>            

        <li class="{{ Request::is('catResolucionInvestigacions*') ? 'active' : '' }}">
            <a href="{!! route('catResolucionInvestigacions.index') !!}"><i class="fa fa-edit"></i><span>Resolucion Investigacion</span></a>
        </li>

        <li class="{{ Request::is('catResolucionAmparos*') ? 'active' : '' }}">
            <a href="{!! route('catResolucionAmparos.index') !!}"><i class="fa fa-edit"></i><span>Resolucion Amparo</span></a>
        </li>

        <li class="{{ Request::is('catSentencias*') ? 'active' : '' }}">
            <a href="{!! route('catSentencias.index') !!}"><i class="fa fa-edit"></i><span>Sentencias</span></a>
        </li>

        <li class="{{ Request::is('catTipoAmparos*') ? 'active' : '' }}">
            <a href="{!! route('catTipoAmparos.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Amparo</span></a>
        </li>

        <li class="{{ Request::is('catTipoMandos*') ? 'active' : '' }}">
            <a href="{!! route('catTipoMandos.index') !!}"><i class="fa fa-edit"></i><span>Tipos Mandamiento</span></a>
        </li>

        <li class="{{ Request::is('catTipoMedidas*') ? 'active' : '' }}">
            <a href="{!! route('catTipoMedidas.index') !!}"><i class="fa fa-edit"></i><span>Tipo de Medidas Cautelares</span></a>
        </li>
        
        <li class="{{ Request::is('catTipoLugars*') ? 'active' : '' }}">
            <a href="{!! route('catTipoLugars.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Lugar Hechos</span></a>
        </li>

        <li class="{{ Request::is('unidads*') ? 'active' : '' }}">
            <a href="{!! route('unidads.index') !!}"><i class="fa fa-edit"></i><span>Unidades Integrales (UIPJ)</span></a>
        </li>

       



     </ul>
</li>
  
<li class="treeview" id="sidebarEntity">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Proceso Penal</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>

    <ul class="treeview-menu">
  		<li class="{{ Request::is('personas*') ? 'active' : '' }}">
		    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas Involucradas</span></a>
		</li>

        <li class="{{ Request::is('procesos*') ? 'active' : '' }}">
            <a href="{!! route('procesos.index') !!}"><i class="fa fa-edit"></i><span>Radicación</span></a>
        </li>

        <li class="{{ Request::is('mandamientos*') ? 'active' : '' }}">
            <a href="{!! route('mandamientos.index') !!}"><i class="fa fa-edit"></i><span>Mandamientos</span></a>
        </li>
  
        <li class="{{ Request::is('audiencias*') ? 'active' : '' }}">
            <a href="{!! route('audiencias.index') !!}"><i class="fa fa-edit"></i><span>Audiencias</span></a>
        </li>

        <li class="{{ Request::is('avances*') ? 'active' : '' }}">
            <a href="{!! route('avances.index') !!}"><i class="fa fa-edit"></i><span>Avances</span></a>
        </li>
    </ul>
</li>



