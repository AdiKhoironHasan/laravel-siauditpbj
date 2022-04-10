<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Audit <b>PBJ</b></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/uploads/{{ Auth::user()->foto }}" class="img-circle elevation-2" alt="foto profil">
            </div>
            <div class="info">
                <a class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                @if (Auth::user()->level == 'Ketua SPI')
                    <li class="nav-item">
                        <a href="/user" class="nav-link">
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
                @endif
                @if (Auth::user()->level == 'Ketua SPI' || Auth::user()->level == 'Auditor')
                    <li class="nav-item">
                        <a href="/rencana" class="nav-link">
                            <i class="nav-icon fas fa-swatchbook"></i>
                            <p>
                                Rencana Kerja Audit
                            </p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->level == 'Auditee')
                    <li class="nav-item">
                        <a href="/barang" class="nav-link {{ Request::is('barang') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-box-open"></i>
                            <p>
                                Paket Barang
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <div class="nav-link bg-secondary text-center align-bottom">
                            <button type="submit" class="btn btn-lg p-0 text-light"><i
                                    class="nav-icon fas fa-sign-out-alt"></i>logout</button>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
