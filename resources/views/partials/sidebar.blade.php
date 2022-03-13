<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Audit <b>PBJ</b></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://akcdn.detik.net.id/community/media/visual/2020/03/05/bc9b1419-1610-418e-bfd0-48dcf6706e9e_169.jpeg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">USER</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/unit" class="nav-link {{ Request::is('unit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Data Unit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/rencana" class="nav-link">
                        <i class="nav-icon fas fa-swatchbook"></i>
                        <p>
                            Rencana Kerja Audit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/barang" class="nav-link {{ Request::is('barang') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Paket Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <div class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <button class="btn bg-transparent p-0 text-light">
                                Logout
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
