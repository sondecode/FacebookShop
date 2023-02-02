<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Nayose') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('page_styles')
</head>

@php
$guest = $guest ?? false;
@endphp

<body class="{{ $guest ? 'login-page' : 'hold-transition sidebar-mini layout-fixed' }}">
    @if ($guest)
        @yield('guest_content')
    @else
        <div class="wrapper">
            <!-- Menu header -->
            @include('components.navbar')
            <!-- Left side column. contains the logo and sidebar -->
            @include('components.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>
    @endif
    <script type="text/javascript" src="{{ asset('js/app.js') }}">
        $(function() {
            $('.collapse').on('show.bs.collapse', function() {
                $('.icon-container').find('.icon-up').removeClass('d-none');
                $('.icon-container').find('.icon-down').addClass('d-none');
            })

            $('.collapse').on('hide.bs.collapse', function() {
                $('.icon-container').find('.icon-up').addClass('d-none');
                $('.icon-container').find('.icon-down').removeClass('d-none');
            })
        })
    </script>

   
    @include('components.js_utils')
    @stack('page_scripts')

</body>

</html>
