<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{asset('assets/img/logo_bri.png')}}" style="width: 2.5rem;rotate: 15deg;">
        </div>
        <div class="sidebar-brand-text mx-3">BANK BRI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::currentRouteName()=='dasbor') active @endif">
        <a class="nav-link" href="{{route('dasbor')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @if($idn_user->role_id == 1)
        <li class="nav-item @if (Route::currentRouteName()=='inp_karyawan' OR Route::currentRouteName()=='list_karyawan') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collkaryawan"
                aria-expanded="true" aria-controls="collkaryawan">
                <i class="fas fa-fw fa-user-tag"></i>
                <span>Karyawan</span>
            </a>
            <div id="collkaryawan" class="collapse @if (Route::currentRouteName()=='inp_karyawan' OR Route::currentRouteName()=='list_karyawan') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if (Route::currentRouteName()=='inp_karyawan') active @endif" href="{{route('inp_karyawan')}}">Input Karyawan</a>
                    <a class="collapse-item @if (Route::currentRouteName()=='list_karyawan') active @endif" href="{{route('list_karyawan')}}">List Karyawan</a>
                </div>
            </div>
        </li>
    @endif

    <li class="nav-item @if (Route::currentRouteName()=='inp_nasabah' OR Route::currentRouteName()=='list_nasabah' OR Route::currentRouteName()=='approve_nasabah') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collnasabah"
            aria-expanded="true" aria-controls="collnasabah">
            <i class="fas fa-fw fa-users"></i>
            <span>Nasabah</span>
        </a>
        <div id="collnasabah" class="collapse @if (Route::currentRouteName()=='inp_nasabah' OR Route::currentRouteName()=='list_nasabah' OR Route::currentRouteName()=='approve_nasabah') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if($idn_user->role_id == 1)
                    <a class="collapse-item @if (Route::currentRouteName()=='approve_nasabah') active @endif" href="{{route('approve_nasabah')}}">Approved Nasabah</a>
                @endif
                <a class="collapse-item @if (Route::currentRouteName()=='inp_nasabah') active @endif" href="{{route('inp_nasabah')}}">Input Nasabah</a>
                <a class="collapse-item @if (Route::currentRouteName()=='list_nasabah') active @endif" href="{{route('list_nasabah')}}">List Nasabah</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>