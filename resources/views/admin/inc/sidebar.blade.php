<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('admin/dist/img/website.png') }}" alt=" Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Think Digital</span>

    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a
                        href="{{ route('admin.dashboard') }}"class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Portfolio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.portfolio') }}"
                                class="nav-link {{ request()->routeIs('admin.portfolio') ? 'active' : '' }}">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.portfolioCategory') }}"
                                class="nav-link {{ request()->routeIs('admin.portfolioCategory') ? 'active' : '' }}">
                                <i class="far fas fa-sitemap nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.featuredList') }}"
                                class="nav-link {{ request()->routeIs('admin.featuredList') ? 'active' : '' }}">
                                <i class="far fa fa-object-group nav-icon"></i>
                                <p>Featured</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.plans') }}"
                                class="nav-link {{ request()->routeIs('admin.plans') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Plans</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.indexFeatures') }}"
                                class="nav-link {{ request()->routeIs('admin.indexFeatures') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Features</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.team') }}"
                        class="nav-link {{ request()->routeIs('admin.team') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p> Our Team </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog') }}"
                        class="nav-link {{ request()->routeIs('admin.blog') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
                        <p> Blog </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('comments.list') }}"
                        class="nav-link {{ request()->routeIs('comments.list') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comments"></i>
                        <p> Blog Comments </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.inquiry') }}"
                        class="nav-link {{ request()->routeIs('admin.inquiry') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contact Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.indexQuote') }}"
                        class="nav-link {{ request()->routeIs('admin.indexQuote') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-question"></i>
                        <p>
                            Get A Quote
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.indexCareer') }}"
                        class="nav-link {{ request()->routeIs('admin.indexCareer') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Career
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.indexSeo') }}"
                        class="nav-link {{ request()->routeIs('admin.indexSeo') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            SEO
                        </p>
                    </a>
                </li>
               <li class="nav-item">
                    <a href="{{ route('logout') }}"
                        class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
