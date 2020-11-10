<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main  sidebar-fixed sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                @if(auth('web')->check())
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->segment(2) == 'home' ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li
                    class="nav-item nav-item-submenu {{ in_array(request()->segment(2), ['user'])  ? 'nav-item-open nav-item-expanded' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span>User Management</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{ route('user.index') }}"
                                class="nav-link {{ request()->segment(2) == 'user' ? 'active' : '' }}">User</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('customer.index') }}"
                                class="nav-link {{ request()->segment(2) == 'customer' ? 'active' : '' }}">Customer</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('request.index') }}"
                                class="nav-link {{ request()->segment(2) == 'pengajuan' ? 'active' : '' }}">Request</a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('customer.profil') }}"
                        class="nav-link {{ request()->segment(2) == 'profile' ? 'active' : '' }}">
                        <i class="icon-user"></i>
                        <span>
                            Profile
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengajuan.index') }}"
                        class="nav-link {{ request()->segment(2) == 'pengajuan' ? 'active' : '' }}">
                        <i class="icon-profile"></i>
                        <span>
                            Pengajuan
                        </span>
                    </a>
                </li>
                @endif
                <!-- /main -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
