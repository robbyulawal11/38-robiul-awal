        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mafaza <sup>Staff</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('appointment.index') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Appointment</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('feedback.index') }}">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Feedback</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('income.index') }}">
                    <i class="fas fa-fw fa-usd"></i>
                    <span>Income</span></a>
            </li>
            @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Users</span></a>
                </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('admin/img/undraw_rocket.svg') }}"
                    alt="...">
            </div>

        </ul>
        <!-- End of Sidebar -->
