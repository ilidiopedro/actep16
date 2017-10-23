<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('trabalhadores*') ? 'active' : '' }}">
    <a href="{!! route('trabalhadores.index') !!}"><i class="fa fa-edit"></i><span>Trabalhadores</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('infraestruturas*') ? 'active' : '' }}">
    <a href="{!! route('infraestruturas.index') !!}"><i class="fa fa-edit"></i><span>Infraestruturas</span></a>
</li>

<li class="{{ Request::is('projectos*') ? 'active' : '' }}">
    <a href="{!! route('projectos.index') !!}"><i class="fa fa-edit"></i><span>Projectos</span></a>
</li>

<li class="{{ Request::is('alocacaos*') ? 'active' : '' }}">
    <a href="{!! route('alocacaos.index') !!}"><i class="fa fa-edit"></i><span>Alocacaos</span></a>
</li>

<li class="{{ Request::is('evolucaos*') ? 'active' : '' }}">
    <a href="{!! route('evolucaos.index') !!}"><i class="fa fa-edit"></i><span>Evolucaos</span></a>
</li>

<li class="{{ Request::is('itens*') ? 'active' : '' }}">
    <a href="{!! route('itens.index') !!}"><i class="fa fa-edit"></i><span>Itens</span></a>
</li>

<li class="{{ Request::is('fases*') ? 'active' : '' }}">
    <a href="{!! route('fases.index') !!}"><i class="fa fa-edit"></i><span>Fases</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('produtos*') ? 'active' : '' }}">
    <a href="{!! route('produtos.index') !!}"><i class="fa fa-edit"></i><span>Produtos</span></a>
</li>

