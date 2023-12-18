<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo-tf.png') }}" alt="logo" width="150" class="img-fluid">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo-tf.png') }}" alt="logo" width="100" class="img-fluid">
        </a>
    </div>
    <ul class="sidebar-menu">

        @section('sidebar')

            <li class="menu-header">Menu</li>
            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-poll-h"></i><span>Dashboard</span>
                </a>
            </li>
        @show
    </ul>

    <div class="mt-4 mb-4 p-2 hide-sidebar-mini">
        <a href="/" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <img src="{{ asset('assets/img/logo-tf.png') }}" alt="logo" width="100" class="img-fluid">
            WEBSITE
        </a>
    </div>
</aside>
