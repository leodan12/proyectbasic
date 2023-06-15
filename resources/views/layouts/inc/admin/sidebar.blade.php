<nav class="sidebar sidebar-offcanvas" id="sidebar"  >
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">INICIO</span>
            </a>
        </li>
        @if (auth()->user()->can('ver-categoria') ||
                auth()->user()->can('crear-categoria') ||
                auth()->user()->can('editar-categoria') ||
                auth()->user()->can('eliminar-categoria'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/category') }}">
                    <i class="mdi mdi-format-list-bulleted-type menu-icon"></i>
                    <span class="menu-title">CATEGORIAS</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->can('ver-producto') ||
                auth()->user()->can('crear-producto') ||
                auth()->user()->can('editar-producto') ||
                auth()->user()->can('eliminar-producto'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/products') }}">
                    <i class="mdi mdi-book menu-icon"></i>
                    <span class="menu-title">PRODUCTOS</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->can('ver-kit') ||
                auth()->user()->can('crear-kit') ||
                auth()->user()->can('editar-kit') ||
                auth()->user()->can('eliminar-kit'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/kits') }}">
                    <i class="mdi mdi-google-circles-communities menu-icon"></i>
                    <span class="menu-title">KITS</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->can('ver-usuario') ||
                auth()->user()->can('crear-usuario') ||
                auth()->user()->can('editar-usuario') ||
                auth()->user()->can('eliminar-usuario'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/users') }}">
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">USUARIOS</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->can('ver-rol') ||
                auth()->user()->can('crear-rol') ||
                auth()->user()->can('editar-rol') ||
                auth()->user()->can('eliminar-rol'))
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/rol') }}">
                    <i class="mdi mdi-account-settings menu-icon"></i>
                    <span class="menu-title">ROLES</span>
                </a>
            </li>
        @endif
       


    </ul>
</nav>
