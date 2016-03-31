<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
    <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    @include('layouts.partials.mainheader')

    @include('layouts.partials.sidebar')
    </nav>


    <!-- Content Wrapper. Contains page content -->
    <div id="page-wrapper">
        <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
            @include('layouts.partials.footer')
    </div>
@section('scripts')
    @include('layouts.partials.scripts')
    @yield('page-script')
@show

</body>
</html>
