<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    @if ($path != 'none' && $path != 'dashboard')
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            action="{{ route($path . '.index') }}" method="GET">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="search"
                    placeholder="Search for {{ $path }} ..." value="{{ request('search') }}" aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    @endif

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('admin/img/undraw_profile.svg') }}"
                    alt="profile">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out fa-lg"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
