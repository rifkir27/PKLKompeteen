<aside class="main-sidebar custom-sidebar">
    <!-- Brand -->
    <a href="/" class="brand-link text-center py-4">
        <span class="brand-text font-weight-bold text-white">
            Kompe<span class="text-orange-500">teen</span>
        </span>
    </a>

    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                {{-- Contoh Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('member.dashboard') }}" class="nav-link {{ active('member.dashboard') }}">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- My Course --}}
                <li class="nav-item">
                    <a href="{{ route('member.mycourse') }}" class="nav-link {{ active('member.mycourse*') }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>My course</p>
                    </a>
                </li>

                {{-- Showcase --}}
                <li class="nav-item">
                    <a href="{{ route('member.showcases.index') }}" class="nav-link {{ active('member.showcases*') }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Showcase</p>
                    </a>
                </li>

                {{-- Transaction --}}
                <li class="nav-item">
                    <a href="{{ route('member.transactions.index') }}" class="nav-link {{ active('member.transactions*') }}">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>Transaction</p>
                    </a>
                </li>

                {{-- Voucher --}}
                <li class="nav-item">
                    <a href="{{ route('member.voucher.redeem') }}" class="nav-link {{ active('member.voucher*') }}">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>Voucher</p>
                    </a>
                </li>

                {{-- Profile --}}
                <li class="nav-item">
                    <a href="{{ route('member.profile.index') }}" class="nav-link {{ active('member.profile.index') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>

                {{-- Logout --}}
                <li class="nav-item">
                    <a href="#" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Sign Out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
    /* Warna sidebar */
    .custom-sidebar {
        background-color: #3B0070; /* ungu tua */
        min-height: 100vh;
    }

    /* Brand text */
    .custom-sidebar .brand-link {
        font-size: 20px;
        letter-spacing: 0.5px;
    }

    /* Menu item */
    .custom-sidebar .nav-link {
        color: #ffffffcc;
        border-radius: 6px;
        margin: 4px 8px;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
    }

    /* Hover effect */
    .custom-sidebar .nav-link:hover {
        background: #5e1a9b;
        color: #fff;
    }

    /* Active link */
    .custom-sidebar .nav-link.active {
        background: #f97316; /* oranye */
        color: #fff !important;
        font-weight: 600;
    }

    /* Icon */
    .custom-sidebar .nav-icon {
        font-size: 18px;
    }
</style>
