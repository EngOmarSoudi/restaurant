
    <!-- partial:partials/_sidebar.html -->
{{--    <nav class="sidebar sidebar-offcanvas" id="sidebar">--}}

{{--        <ul class="nav">--}}



{{--        </ul>--}}
{{--    </nav>--}}

    <!-- partial -->

















{{--==============================================================================--}}
{{--==============================================================================--}}
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

                <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="admin/assets/images/klassy-logo.png" alt="logo" /></a>
{{--                <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>--}}

            </div>

            <ul class="nav">

                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                        <span class="menu-title">users</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">FoodMenu</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/viewchef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                        <span class="menu-title">Chefs</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                        <span class="menu-title">Reservetion</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{url('/vieworder')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                        <span class="menu-title">order</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
{{--                    <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>--}}
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form action="{{url('/search')}}" method="get" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                @csrf
                                <input type="text" name="search" class="form-control" placeholder="Search products">
                                <input type="submit" value="search">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <x-app-layout>
                                    </x-app-layout>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
