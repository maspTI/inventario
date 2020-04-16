<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('/img/masp.jpg') }}">
    <div class="logo">
        <a href="{{ route('dashboard.index') }}" class="simple-text logo-normal">Inventário <span class="masp-logo">MASP</span></a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ url()->current() == route('dashboard.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('devices.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('devices.index') }}">
                    <p>Dispositivos</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('devices.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('devices.index') }}">
                    <p>Adicionar Dispositivos</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('categories.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('categories.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <p>Adicionar Categoria</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('brands.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('brands.index') }}">
                    <p>Marcas</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('brands.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('brands.index') }}">
                    <p>Adicionar Marca</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('patterns.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('patterns.index') }}">
                    <p>Modelos</p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('patterns.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('patterns.index') }}">
                    <p>Adicionar Modelo</p>
                </a>
            </li>
        </ul>
    </div>
</div>
