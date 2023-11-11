<nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color:  rgb(20, 100, 70);" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Management <span class="spinner-grow"></span> </div>
                            <a class="nav-link {{(Request::segment(1) == 'dashboard') ? 'active' : '' }}" href="{{ url('/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr style="color:white;">
                            <a class="nav-link {{(Request::segment(1) == 'master') ? 'active' : '' }} " href="{{ url('/master/barang')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                                Master Data
                            </a>
                            <hr style="color:white;">
                            <a class="nav-link {{(Request::segment(1) == 'stok') ? 'active' : '' }} " href="{{ url('/stok')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                                Master Stok
                            </a>
                            <hr style="color:white;">
                            <a class="nav-link {{(Request::segment(1) == 'stok-keluar') ? 'active' : '' }} " href="{{ url('/stok-keluar')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                                Stock Keluar
                            </a>
                            <hr style="color:white;">
                            <a class="nav-link {{(Request::segment(1) == 'History-Delete') ? 'active' : '' }} " href="{{ url('/History-Delete')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-trash"></i></div>
                                Restore Item
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background-color:  rgb(20, 100, 70);">
                        <div class="small">admin : </div>
                        {{Auth::user()->name}}
                    </div>
                </nav>