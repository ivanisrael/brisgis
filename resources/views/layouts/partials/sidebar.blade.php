 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="{!! Request::is('/') || Request::is('home') ? 'active' : '' !!}"><a href="home"><i class='fa fa-dashboard'></i> <span>Home</span></a></li>
                    <li class="{!! Request::is('users') ? 'active' : '' !!}"><a href="{{ route('users.index') }}"><i class='fa fa-users '></i> <span>Users</span></a></li>
                    <li class="{!! Request::is('provinces') ? 'active' : '' !!}"><a href="{{ route('provinces.index') }}"><i class='fa fa-university '></i> <span>Pronvinces</span></a></li>
                    <li class="{!! Request::is('barangays') ? 'active' : '' !!}"><a href="{{ route('barangays.index') }}"><i class='fa fa-legal'></i> <span>Barangays</span></a></li>
                    <li class="{!! Request::is('households') ? 'active' : '' !!}"><a href="{{ route('households.index') }}"><i class='fa fa-home '></i> <span>Households</span></a></li>
                    <li class="{!! Request::is('reports') ? 'active' : '' !!}"><a href="{{ route('reports.index') }}"><i class='fa fa-bar-chart'></i> <span>Reports</span></a></li>
                    <li class="{!! Request::is('maps') ? 'active' : '' !!}"><a href="{{ route('maps.index') }}"><i class='fa fa-map-marker'></i> <span>Maps</span></a></li>
                </ul>
            </div>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

