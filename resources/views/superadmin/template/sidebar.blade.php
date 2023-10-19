<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="text-nowrap logo-img">
                <img src="{{asset('public/images/dark-logo.svg')}}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>



                <li class="sidebar-item">
                    <a class="sidebar-link  {{request()->is('dashboard') ? 'active' :''}}"
                        href="{{url('dashboard')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                @if(auth()->user()->role=='security')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('security') ? 'active' :''}}"
                        href="{{url('security')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Security</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='hse')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('hse') ? 'active' :''}}"
                        href="{{url('hse')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">HSE</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='admin_in')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('admin_in') ? 'active' :''}}"
                        href="{{url('admin_in')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Admin In</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='timbangan_in')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('timbangan_in') ? 'active' :''}}"
                        href="{{url('timbangan_in')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Timbangan In</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='loading_bay')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('loading_bay') ? 'active' :''}}"
                        href="{{url('loading_bay')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Loading Bay</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='timbangan_out')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('timbangan_out') ? 'active' :''}}"
                        href="{{url('timbangan_out')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Timbangan Out</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='admin_out')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('admin_out') ? 'active' :''}}"
                        href="{{url('admin_out')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Admin Out</span>
                    </a>
                </li>
                @elseif(auth()->user()->role=='super_admin')
                <li class="sidebar-item">
                    <a class="sidebar-link {{request()->is('superadmin/akun/*') ? 'active' :''}}"
                        href="{{url('superadmin/akun')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Keloka User</span>
                    </a>
                </li>


                @endif

              
             

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>