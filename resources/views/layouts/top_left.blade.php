<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="o-auto {{ backpack_theme_config('classes.body') }}">

@include(backpack_view('inc.theming'))

<div class="page">
    @includeWhen(!\Backpack\ThemeTabler\ThemeOptions::isHorizontalLayout(), backpack_view('inc.menu-vertical'))

    <div class="page-wrapper">

        @include(backpack_view('inc.main_header'))

        <div class="page-body">
            <main class="{{ \Backpack\ThemeTabler\ThemeOptions::shouldUseFluidContainers() ? 'container-fluid' : 'container-xl' }}">

                @yield('before_breadcrumbs_widgets')

                @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

                @yield('after_breadcrumbs_widgets')

                @yield('header')

                <div class="container-fluid animated fadeIn">

                    @yield('before_content_widgets')

                    @yield('content')

                    @yield('after_content_widgets')

                </div>
            </main>
        </div>

        @include(backpack_view('inc.footer'))
    </div>
</div>

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>