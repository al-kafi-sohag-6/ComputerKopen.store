<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column custom-menu" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        @if(auth()->user()->admin())
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users/*') ? 'active' : '' }}">
                <i class="fa-solid fa-users-gear"></i>
                <p>
                    User Management
                </p>
            </a>
        </li>
        @endif
    </ul>
</nav>
<!-- /.sidebar-menu -->
