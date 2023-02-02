<!-- Main Header -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="{{ route('profile') }}" class="nav-link dropdown-toggle">
                <img src="{{ asset('imagers/thumbnail.png') }}"
                     class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>

        </li>

    </ul>
</nav>
