<li class="{{ Request::is('catEtnias*') ? 'active' : '' }}">
    <a href="{!! route('catEtnias.index') !!}"><i class="fa fa-edit"></i><span>CatEtnias</span></a>
</li>

<li class="{{ Request::is('catEdoCivils*') ? 'active' : '' }}">
    <a href="{!! route('catEdoCivils.index') !!}"><i class="fa fa-edit"></i><span>CatEdoCivils</span></a>
</li>

<li class="{{ Request::is('catEscolaridads*') ? 'active' : '' }}">
    <a href="{!! route('catEscolaridads.index') !!}"><i class="fa fa-edit"></i><span>catEscolaridads</span></a>
</li>

<li class="{{ Request::is('catReligions*') ? 'active' : '' }}">
    <a href="{!! route('catReligions.index') !!}"><i class="fa fa-edit"></i><span>CatReligions</span></a>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

