<div class="sidebar" data-background-color="dark">

    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="" class="logo" style="color: #fff;">
                Portfolio
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">


                {{-- /*profile update strategy*/ --}}

                <li class="nav-item @if ($page_slug == 'dashboard') active @endif">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item @if ($page_slug == 'profile') active @endif">
                    <a href="{{ route('admin.profile.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Profile</p>
                    </a>
                </li>
                {{-- end --}}



                <li class="nav-item @if ($page_slug == 'skills') active @endif">
                    <a href="{{ route('admin.skills.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Skills</p>
                    </a>
                </li>


                <!-- <li class="nav-item @if ($page_slug == 'portfolios') active @endif">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Portfolios</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.portfolios.index') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Portfolio</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.port_categories.index') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Portfolio Category</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <li class="nav-item  @if ($page_slug == 'portfolios' || $page_slug == 'portfolio_categories') active submenu @endif">
                    <a data-bs-toggle="collapse" href="#admin_management"
                        @if ($page_slug = 'admin') aria-expanded="true" @endif>
                        <i class="fas fa-bars"></i>
                        <p>{{ __('Portfolio Management') }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if ($page_slug == 'portfolios' || $page_slug == 'portfolio_categories') show @endif" id="admin_management">
                        <ul class="nav nav-collapse">
                            <li class="@if ($page_slug == 'portfolio_categories') active @endif">
                                <a href="{{ route('admin.port_categories.index') }}">
                                    <span class="sub-item">{{ __('Category') }}</span>
                                </a>
                            </li>
                            <li class="@if ($page_slug == 'portfolios') active @endif">
                                <a href="{{ route('admin.portfolios.index') }}">
                                    <span class="sub-item">{{ __('Portfolio') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                {{--<!-- <li class="nav-item  @if ($page_slug == 'portfolios' || $page_slug == 'portfolio_categories') active submenu @endif">
                    <a data-bs-toggle="collapse" href="#portfolio_management"
                        @if ($page_slug == 'admin') aria-expanded="true" @endif>
                        <i class="fas fa-bars"></i>
                        <p>Admin Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if ($page_slug == 'portfolios' || $page_slug == 'portfolio_categories') show @endif" id="portfolio_management">
                        <ul class="nav nav-collapse">
                            <li class="@if ($page_slug == 'portfolio_categories') active @endif">
                                <a href="{{ route('admin.port_categories.index') }}">
                                    <span class="sub-item">{{ __('Category') }}</span>
                                </a>
                            </li>
                            <li class="@if ($page_slug == 'portfolios') active @endif">
                                <a href="{{ route('admin.portfolios.index') }}">
                                    <span class="sub-item">{{ __('Portfolio') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->--}}

                <li class="nav-item @if ($page_slug == 'testimonials') active @endif">
                    <a href="{{ route('admin.testimonials.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                <li class="nav-item @if ($page_slug == 'experiences') active @endif">
                    <a href="{{ route('admin.experiences.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Experiences</p>
                    </a>
                </li>

                <li class="nav-item @if ($page_slug == 'services') active @endif">
                    <a href="{{ route('admin.services.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Services</p>
                    </a>
                </li>
                <li class="nav-item @if ($page_slug == 'education') active @endif">
                    <a href="{{ route('admin.education.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Education</p>
                    </a>
                </li>
                <li class="nav-item @if ($page_slug == 'site_settings') active @endif">
                    <a href="{{ route('admin.site.settings') }}">
                        <i class="fas fa-home"></i>
                        <p>Site Settings</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Base</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">Avatars</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Grid System</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/panels.html">
                                    <span class="sub-item">Panels</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/notifications.html">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/sweetalert.html">
                                    <span class="sub-item">Sweet Alert</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/font-awesome-icons.html">
                                    <span class="sub-item">Font Awesome Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/simple-line-icons.html">
                                    <span class="sub-item">Simple Line Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/typography.html">
                                    <span class="sub-item">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
