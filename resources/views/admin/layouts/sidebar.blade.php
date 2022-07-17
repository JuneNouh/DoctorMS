<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{url('dashboard') }}">
                <div class="logo-img">
                </div>
                <span class="text">Kalmar Hostpital</span>
            </a>

        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigation</div>
                    <div class="nav-item active">
                        <a href="{{url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Clinic System</span></a>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-heart"></i><span>Doctor</span> </a>
                        <div class="submenu-content">
                            <a href="{{route('doctor.index') }}" class="menu-item">Doctors </a>
                            <a href="{{route('doctor.create') }}" class="menu-item">Create</a>

                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-edit"></i><span>Appointments</span> </a>
                        <div class="submenu-content">
                            <a href="{{route('appointment.create')}}" class="menu-item">Create</a>
                            <a href="{{route('appointment.index')}}" class="menu-item">Check</a>
                            <a href="pages/widget-data.html" class="menu-item">Data</a>
                            <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> </a>
                        <div class="submenu-content">
                            <a href="pages/widgets.html" class="menu-item">Basic</a>
                            <a href="pages/widget-statistic.html" class="menu-item">Statistic</a>
                            <a href="pages/widget-data.html" class="menu-item">Data</a>
                            <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>