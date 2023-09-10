<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
    <meta name="Author" content="SPRUKO™">
    <meta name="Keywords"
        content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- styles -->
    @include('Dashboard.layouts.vertical.styles')
    @livewireStyles


</head>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        @if (\Auth::guard('admin')->check())
            @include('Dashboard.layouts.app-sidebar.admin-sidebar')
        @endif

        @if (\Auth::guard('doctor')->check())
            @include('Dashboard.layouts.app-sidebar.doctor-sidebar')
        @endif

        @if (\Auth::guard('ray_employee')->check())
            @include('Dashboard.layouts.app-sidebar.ray_employee-sidebar')
        @endif

        @if (\Auth::guard('laboratorie_employee')->check())
            @include('Dashboard.layouts.app-sidebar.laboratorie_employee-sidebar')
        @endif

        @if (\Auth::guard('patient')->check())
            @include('Dashboard.layouts.app-sidebar.patient-sidebar')
        @endif

        <!-- main-content -->
        <div class='main-content app-content'>

            <!-- main-header -->
            @include('Dashboard.layouts.vertical.main-header')

            <!-- Container open -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- Container closed -->

        </div>
        <!-- main-content closed -->

        <!-- sidebar-right -->
        @include('Dashboard.layouts.sidebar-left')

        <!-- footer -->
        @include('Dashboard.layouts.footer')

        <!-- modal -->
        @yield('modal')

    </div>
    <!-- Page closed -->

    <!-- scripts -->
    @include('Dashboard.layouts.vertical.scripts')
</body>

</html>
