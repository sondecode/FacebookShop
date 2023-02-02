<aside class="main-sidebar sidebar-dark-primary elevation-4  bg-info">
    <a href="{{ route('users') }}" class="brand-link text-center">
        <h4 class="brand-text font-weight-900 m-0">{{ config('app.name') }}</h4>
    </a>

    <div class="sidebar ">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('components.menu_item')
            </ul>
        </nav>
    </div>

</aside>
