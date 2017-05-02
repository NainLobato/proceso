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
        <li class="{{ Request::is('catEtnias*') ? 'active' : '' }}">
			<a href="{!! route('catEtnias.index') !!}"><i class="fa fa-edit"></i><span>Etnias</span></a>
		</li>
		<li class="{{ Request::is('catEdoCivils*') ? 'active' : '' }}">
		    <a href="{!! route('catEdoCivils.index') !!}"><i class="fa fa-edit"></i><span>Estado Civil</span></a>
		</li>
		<li class="{{ Request::is('catEscolaridads*') ? 'active' : '' }}">
		    <a href="{!! route('catEscolaridads.index') !!}"><i class="fa fa-edit"></i><span>Escolaridad</span></a>
		</li>
		<li class="{{ Request::is('catReligions*') ? 'active' : '' }}">
		    <a href="{!! route('catReligions.index') !!}"><i class="fa fa-edit"></i><span>Religion</span></a>
		<li class="{{ Request::is('catNacionalidads*') ? 'active' : '' }}">
		    <a href="{!! route('catNacionalidads.index') !!}"><i class="fa fa-edit"></i><span>Nacionalidad</span></a>
		</li>
		<li class="{{ Request::is('catJuzgadoFeds*') ? 'active' : '' }}">
		    <a href="{!! route('catJuzgadoFeds.index') !!}"><i class="fa fa-edit"></i><span>Juzgado</span></a>
		</li>
    </ul>
</li>
  
<li class="treeview" id="sidebarEntity">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Entidades</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
  		<li class="{{ Request::is('personas*') ? 'active' : '' }}">
		    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
		</li>
	</ul>
</li><li class="{{ Request::is('mandamientos*') ? 'active' : '' }}">
    <a href="{!! route('mandamientos.index') !!}"><i class="fa fa-edit"></i><span>Mandamientos</span></a>
</li>

