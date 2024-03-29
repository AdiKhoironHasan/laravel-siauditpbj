<aside class="main-sidebar sidebar-light-orange elevation-1">
    <a href="/home" class="brand-link" style="background-color: #FF8364">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-dark" style="color: white">Audit <b>PBJ</b></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/uploads/{{ Auth::user()->foto }}" class="img-circle elevation-1" alt="foto profil"
                    style="object-fit:cover; width:46px; height:46px">
            </div>
            <div class="info d-flex align-items-center text-truncate col-8">
                <b>{{ strtok(Auth::user()->name, " ") }}</b>
            </div>
        </div>

        {{-- <nav class="mt-2"> --}}
            <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>

                @can('admin')
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                @endcan

                {{-- @canany(['admin', 'auditor']) --}}
                <li class="nav-item">
                    <a href="/rencana" class="nav-link {{ Request::is('rencana*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-swatchbook"></i>
                        <p>
                            Rencana Kerja Audit
                        </p>
                    </a>
                </li>
                {{-- @endcanany --}}

                <li class="nav-item" style="overflow:auto;">
                    <form action="/logout" method="POST">
                        @csrf
                        <div class="nav-link bg-secondary text-center">
                            <button type="submit" class="btn btn-lg p-0 text-light"><i
                                    class="nav-icon fas fa-sign-out-alt"></i>logout</button>
                        </div>
                    </form>
                </li>
            </ul>
            {{--
        </nav> --}}
    </div>
</aside>
