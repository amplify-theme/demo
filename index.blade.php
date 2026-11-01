@php
    $error_title = isset($error_number) ? $error_number : '';
    $error = isset($error_number);
@endphp
<x-amplify.web-page>
    <!-- Top Bar -->
    <x-notice-slider/>
    <x-site.top-bar :render="theme_option('topbar_enabled')"/>
    <!-- Mobile Menu-->
    <x-menu.mobile-menu/>
    <!-- Desktop Menu-->
    <header @class(['navbar', 'navbar-sticky' => theme_option('sticky_header')])>
        <div @class(['container-collapse-p0', 'container' => !theme_option('full_screen_header'), 'container-fluid' => theme_option('full_screen_header')])>
            <!-- Search-->
            <x-site.search :show-search-button="false" class="site-search">
                <div>
                    <i class="icon-search" id="icon-search_searchbar"></i>
                </div>
            </x-site.search>
            <!-- Site Brand Logo -->
            <x-site.brand-logo/>
            <!-- Main Navigation-->
            <x-menu.primary-menu/>
            <!-- Toolbar-->
            <x-site.toolbar>
                @if(config('amplify.sayt.enabled', true))
                    <div class="search show-search" data-title="Search">
                        <i class="icon-search"></i>
                    </div>
                @endif
                <x-menu.cart-menu :show-badge="false"/>
                <x-menu.account-menu :show-contact-avatar="false"/>
            </x-site.toolbar>
        </div>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper" id="position-inherit">
        <!-- Page Content-->
        <x-breadcrumb :title="$error_title" :error="$error" :hide-title="false"/>
        <div class="page-content-body">
            @yield('content')
        </div>
        <!-- Footer-->
        <x-site.footer/>
    </div>
</x-amplify.web-page>
