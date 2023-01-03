<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('home.includes.head')
    @yield('head-area')
</head>

<body class="frontpage node--type-landing-page">
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        @include('home.includes.header')
        <main id="main-content">
                <div id="block-iitm-content" data-block-plugin-id="system_main_block">
                    <div class="content block-content">
                        @yield('content')

                        <!-- footer start -->
                        @include('home.includes.footer')
                        <!-- footer end -->

                        @include('home.includes.foot')
                        <!-- footer end -->
                        @yield('script-area')
                    </div>
                </div>
        </main>
    </div>

</body>

</html>
