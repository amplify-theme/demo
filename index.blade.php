@php
    $error_title = isset($error_number) ? $error_number : '';
    $error = isset($error_number);
@endphp
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <x-amplify.head/>
</head>
<body>
<div class="{{ template()->slug }}">
    <!-- Top Bar -->
    <div class="topbar-section">
        <div
            class="@if(template_option('full_screen_header')) container-fluid @else container @endif container-collapse-p0">
            <x-site.top-bar/>
        </div>
    </div>
    <!-- Mobile Menu-->
    <x-menu.mobile-menu/>
    <!-- Desktop Menu-->
    <div class="main-header">
        <div class="@if(template_option('full_screen_header')) container-fluid @else container @endif container-collapse-p0">
            <div class="row">
                <div class="col-12">
                    <header class="navbar border-0 px-0">
                        <!-- Site Brand Logo -->
                        <x-site.brand-logo/>
                        <!-- Toolbar-->
                        <x-site.toolbar/>
                    </header>
                </div>
            </div>
        </div>
        <!--Site Menu -->
        <div class="bg-primary">
            <div class="@if(template_option('full_screen_header')) container-fluid @else container @endif">
                <div class="row">
                    <div class="col-12">
                        <x-menu.primary-menu/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper" id="position-inherit">
        <!-- Page Content-->
        <div class="page-content-body">
            <x-breadcrumb :title="$error_title" :error="$error"/>
            @yield('page-content')
            {!! Blade::render($content ?? '')  !!}
        </div>
        <!-- Footer-->
        <x-site.footer/>
    </div>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#">
        <i class="icon-arrow-up fa-beat pe-7s-angle-up font-weight-bolder" style="font-size: 2rem;"></i>
    </a>
</div>
<x-amplify.foot/>
</body>
</html>

