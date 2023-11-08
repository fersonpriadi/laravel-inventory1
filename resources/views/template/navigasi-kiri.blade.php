<nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: purple;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link {{(Request::segment(1) == 'dashboard') ? 'active' : '' }}" href="{{ url('/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <hr style="color:blue;">
                            <a class="nav-link {{(Request::segment(1) == 'master') ? 'active' : '' }} " href="{{ url('/master')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                                Master Data
                            </a>

                            <a class="nav-link {{(Request::segment(1) == 'stock') ? 'active' : '' }} " href="{{ url('/stock')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                                Master Stok
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background-color: blue;">
                        <div class="small">User berhasil login</div>
                        {{Auth::user()->name}}
                    </div>
                </nav>