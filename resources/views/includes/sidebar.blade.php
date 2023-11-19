<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('admin/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-30">
            <img src="{{ asset('../css/BPSLOGO.png') }}" alt=""style="width: 90%; height: auto; background: transparent;">
        </div>
        <div class="sidebar-brand-text mx-3">AsaMPedaS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Navigation
    </div>

    <!-- Nav Item - Home Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHome"
            aria-expanded="true" aria-controls="collapseHome">
            <i class="fas fa-fw fa-folder"></i>
            <span>Home</span>
        </a>
        <div id="collapseHome" class="collapse" aria-labelledby="headingHome" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{asset ('admin/login')}}">Login</a>
                <a class="collapse-item" href="{{asset ('admin/register') }}">Register</a>
                <a class="collapse-item" href="{{asset ('forgot-password.html') }}">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Home:</h6>
                <a class="collapse-item" href="{{asset ('backend/404.html') }}">404 Page</a>
                <a class="collapse-item" href="{{asset ('backend/blank.html') }}">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Manajemen Konten -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManajemenKKonten"
            aria-expanded="true" aria-controls="collapseManajemenKKonten">
            <i class="fas fa-solid fa-file"></i> 
            <span>Manajemen Konten</span>
        </a>
        <div id="collapseManajemenKKonten" class="collapse" aria-labelledby="headingManajemenKKonten">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ asset('backend/utilities-color.html') }}">Colors</a>
                <a class="collapse-item" href="{{ asset('backend/utilities-border.html') }}">Borders</a>
                <a class="collapse-item" href="{{ asset('backend/utilities-animation.html') }}">Animations</a>
                <a class="collapse-item" href="{{ asset('backend/utilities-other.html') }}">Other</a>
            </div>
        </div>
    </li>

        <!-- Nav Item - Manajemen Pengguna -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManajemenPengguna"
                aria-expanded="true" aria-controls="collapseManajemenPengguna">
                <i class="fas fa-fw fa-folder"></i>
                <span>Manajemen Pengguna</span>
            </a>
            <div id="collapseManajemenPengguna" class="collapse" aria-labelledby="headingManajemenPengguna">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ asset('backend/utilities-color.html') }}">
                        <i class="fas fa-regular fa-user" style="margin-right: 5px;"></i>
                        Daftar Pengguna
                    </a>
                    <a class="collapse-item" href="{{ asset('backend/utilities-border.html') }}">
                        <i class="fas fa-regular fa-user-plus" style="margin-right: 4px;"></i>
                        Tambah Pengguna
                    </a>
                    <a class="collapse-item" href="{{ asset('backend/utilities-animation.html') }}">
                        <i class="fas fa-regular fa-file-import" style="margin-right: 4px;"></i>
                        Import Pengguna
                    </a>
                </div>
            </div>     
        </li>

        <!-- Nav Item - Manajemen Buku Tamu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('') }}">
                    <i class="fas fa-solid fa-folder-open"></i>
                    <span>Manajemen Buku Tamu</span></a>
            </li>

            <!-- Nav Item - History Broadcast -->
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('backend/tables.html') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>History Broadcast</span></a>
            </li>

            <!-- Nav Item - Live Chat Whatsapp -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{asset('backend/tables.html')}}">
                    <i class="fab fa-solid fa-whatsapp"></i>
                    <span>Live Chat Whatsapp</span></a> 
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLiveChatWhatsapp"
                    aria-expanded="true" aria-controls="collapseLiveChatWhatsapp"></a>
                    <div id="collapseLiveChatWhatsapp" class="collapse" aria-labelledby="headingLiveChatWhatsapp">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ asset('livechat/whatsapp') }}">All in Box</a>
                            <a class="collapse-item" href="{{ asset('') }}">Consultation</a>
                        </div>
            </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>