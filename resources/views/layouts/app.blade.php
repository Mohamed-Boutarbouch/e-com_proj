<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')

<body class="biolife-body">
    <!-- Preloader -->
    @include('layouts.preloader')

    <!-- HEADER -->
    @include('layouts.header')

    <!-- Page Contain -->
    <div class="page-contain">
        <!-- Main content -->
        <div id="main-content" class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- FOOTER -->
    @include('layouts.footer')

    <!--Footer For Mobile-->
    @include('layouts.footer_mobile')

    <!--Mobile Global Menu-->
    @include('layouts.footer_mobile')

    <!--Quickview Popup-->
    @include('layouts.quickview_popup')

    <!-- Scroll Top Button -->
    @include('layouts.scroll_top_button')

    @include('layouts.script')

</body>

</html>