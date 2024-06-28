<div class="sidebar-wrapper active" style="background-color: #f0c8fc!important">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('dist/images/logo/logo-pbl.png') }}" alt="Logo"
                        style="width: 50px; height: auto;">
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item {{ Request::is('admin*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->role_id == 1)
                <li class="sidebar-item has-sub {{ Request::is('products*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-archive"></i>
                        <span>Product</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ Request::routeIs('admin.products.index') ? 'active' : '' }}">
                            <a href="{{ route('products.index') }}" class="submenu-link">Lihat Product </a>
                        </li>
                        <li class="submenu-item {{ Request::routeIs('admin.products.create') ? 'active' : '' }}">
                            <a href="{{ route('products.create') }}" class="submenu-link">Tambah Product </a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (auth()->user()->role_id == 1)
                <li class="sidebar-item has-sub {{ Request::is('invoices*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-credit-card"></i>
                        <span>Pembayaran</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ Request::routeIs('admin.invoices.index') ? 'active' : '' }}">
                            <a href="{{ route('invoices.index') }}" class="submenu-link">Lihat Pembayaran </a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (auth()->user()->role_id == 1)
                <li class="sidebar-item has-sub {{ Request::is('total-bills*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-credit-card"></i>
                        <span>Kelola Pengguna</span>
                    </a>

                    <ul class="submenu">
                        <li class="submenu-item {{ Request::routeIs('admin.total-bills.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.total-bills.index') }}" class="submenu-link">Lihat Pembayaran </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="sidebar-item">
                <a href="{{ route('logout') }}" class='sidebar-link'
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

</div>
