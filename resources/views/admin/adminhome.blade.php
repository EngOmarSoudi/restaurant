

<x-app-layout>
</x-app-layout>

    <!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
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
                        <form action="{{url('/searchhome')}}" method="get" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
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

@include("admin.adminscript")
</body>
</html>




{{--==========================================================================================================--}}
{{--==========================================================================================================--}}



{{--<li class="nav-item menu-items">--}}
{{--    <a class="nav-link" href="Admin2/pages/icons/mdi.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-contacts"></i>--}}
{{--              </span>--}}
{{--        <span class="menu-title">Icons</span>--}}
{{--    </a>--}}
{{--</li>--}}
{{--<li class="nav-item menu-items">--}}
{{--    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-security"></i>--}}
{{--              </span>--}}
{{--        <span class="menu-title">User Pages</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--    </a>--}}
{{--    <div class="collapse" id="auth">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/samples/blank-page.html"> Blank Page </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/samples/error-404.html"> 404 </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/samples/error-500.html"> 500 </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/samples/login.html"> Login </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/samples/register.html"> Register </a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</li>--}}
{{--<li class="nav-item menu-items">--}}
{{--    <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-file-document-box"></i>--}}
{{--              </span>--}}
{{--        <span class="menu-title">Documentation</span>--}}
{{--    </a>--}}
{{--</li>--}}



{{--<li class="nav-item menu-items">--}}
{{--    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-laptop"></i>--}}
{{--              </span>--}}
{{--        <span class="menu-title">Basic UI Elements</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--    </a>--}}
{{--    <div class="collapse" id="ui-basic">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/ui-features/buttons.html">Buttons</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/ui-features/dropdowns.html">Dropdowns</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="Admin2/pages/ui-features/typography.html">Typography</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</li>--}}



{{--<li class="nav-item profile">--}}
{{--    <div class="profile-desc">--}}
{{--        <div class="profile-pic">--}}
{{--            <div class="count-indicator">--}}
{{--                <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">--}}
{{--                <span class="count bg-success"></span>--}}
{{--            </div>--}}
{{--            <div class="profile-name">--}}
{{--                <h5 class="mb-0 font-weight-normal">Henry Klein</h5>--}}
{{--                <span>Gold Member</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>--}}
{{--        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">--}}
{{--            <a href="#" class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                        <i class="mdi mdi-settings text-primary"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <div class="dropdown-divider"></div>--}}
{{--            <a href="#" class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                        <i class="mdi mdi-onepassword  text-info"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <div class="dropdown-divider"></div>--}}
{{--            <a href="#" class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                    <div class="preview-icon bg-dark rounded-circle">--}}
{{--                        <i class="mdi mdi-calendar-today text-success"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content">--}}
{{--                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</li>--}}

{{--<!-- partial -->--}}
{{--<div class="container-fluid page-body-wrapper">--}}
{{--    <!-- partial:partials/_navbar.html -->--}}
{{--    <nav class="navbar p-0 fixed-top d-flex flex-row">--}}
{{--        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">--}}
{{--            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>--}}
{{--        </div>--}}
{{--        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">--}}
{{--            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">--}}
{{--                <span class="mdi mdi-menu"></span>--}}
{{--            </button>--}}
{{--            <ul class="navbar-nav w-100">--}}
{{--                <li class="nav-item w-100">--}}
{{--                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">--}}
{{--                        <input type="text" class="form-control" placeholder="Search products">--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <ul class="navbar-nav navbar-nav-right">--}}
{{--                <li class="nav-item dropdown d-none d-lg-block">--}}
{{--                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Projects</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-file-outline text-primary"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">Software Development</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-web text-info"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">UI Development</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-layers text-danger"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">Software Testing</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <p class="p-3 mb-0 text-center">See all projects</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-settings d-none d-lg-block">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="mdi mdi-view-grid"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown border-left">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="mdi mdi-email"></i>--}}
{{--                        <span class="count bg-success"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Messages</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="admin/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">Mark send you a message</p>--}}
{{--                                <p class="text-muted mb-0"> 1 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="admin/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>--}}
{{--                                <p class="text-muted mb-0"> 15 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <img src="admin/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject ellipsis mb-1">Profile picture updated</p>--}}
{{--                                <p class="text-muted mb-0"> 18 Minutes ago </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <p class="p-3 mb-0 text-center">4 new messages</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown border-left">--}}
{{--                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">--}}
{{--                        <i class="mdi mdi-bell"></i>--}}
{{--                        <span class="count bg-danger"></span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Notifications</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-calendar text-success"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject mb-1">Event today</p>--}}
{{--                                <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-settings text-danger"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject mb-1">Settings</p>--}}
{{--                                <p class="text-muted ellipsis mb-0"> Update dashboard </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-link-variant text-warning"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject mb-1">Launch Admin</p>--}}
{{--                                <p class="text-muted ellipsis mb-0"> New admin wow! </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <p class="p-3 mb-0 text-center">See all notifications</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">--}}
{{--                        <div class="navbar-profile">--}}
{{--                            <img class="img-xs rounded-circle" src="admin/assets/images/faces/face15.jpg" alt="">--}}
{{--                            <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>--}}
{{--                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">--}}
{{--                        <h6 class="p-3 mb-0">Profile</h6>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-settings text-success"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject mb-1">Settings</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-dark rounded-circle">--}}
{{--                                    <i class="mdi mdi-logout text-danger"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content">--}}
{{--                                <p class="preview-subject mb-1">Log out</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <p class="p-3 mb-0 text-center">Advanced settings</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">--}}
{{--                <span class="mdi mdi-format-line-spacing"></span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    <!-- partial -->--}}
{{--    <div class="main-panel">--}}
{{--        <div class="content-wrapper">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 grid-margin stretch-card">--}}
{{--                    <div class="card corona-gradient-card">--}}
{{--                        <div class="card-body py-0 px-0 px-sm-3">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col-4 col-sm-3 col-xl-2">--}}
{{--                                    <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-5 col-sm-7 col-xl-8 p-0">--}}
{{--                                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>--}}
{{--                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">--}}
{{--                        <span>--}}
{{--                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>--}}
{{--                        </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-9">--}}
{{--                                    <div class="d-flex align-items-center align-self-start">--}}
{{--                                        <h3 class="mb-0">$12.34</h3>--}}
{{--                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <div class="icon icon-box-success ">--}}
{{--                                        <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text-muted font-weight-normal">Potential growth</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-9">--}}
{{--                                    <div class="d-flex align-items-center align-self-start">--}}
{{--                                        <h3 class="mb-0">$17.34</h3>--}}
{{--                                        <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <div class="icon icon-box-success">--}}
{{--                                        <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text-muted font-weight-normal">Revenue current</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-9">--}}
{{--                                    <div class="d-flex align-items-center align-self-start">--}}
{{--                                        <h3 class="mb-0">$12.34</h3>--}}
{{--                                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <div class="icon icon-box-danger">--}}
{{--                                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text-muted font-weight-normal">Daily Income</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-9">--}}
{{--                                    <div class="d-flex align-items-center align-self-start">--}}
{{--                                        <h3 class="mb-0">$31.53</h3>--}}
{{--                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <div class="icon icon-box-success ">--}}
{{--                                        <span class="mdi mdi-arrow-top-right icon-item"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text-muted font-weight-normal">Expense current</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Transaction History</h4>--}}
{{--                            <canvas id="transaction-history" class="transaction-chart"></canvas>--}}
{{--                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">--}}
{{--                                <div class="text-md-center text-xl-left">--}}
{{--                                    <h6 class="mb-1">Transfer to Paypal</h6>--}}
{{--                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>--}}
{{--                                </div>--}}
{{--                                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">--}}
{{--                                    <h6 class="font-weight-bold mb-0">$236</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">--}}
{{--                                <div class="text-md-center text-xl-left">--}}
{{--                                    <h6 class="mb-1">Tranfer to Stripe</h6>--}}
{{--                                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>--}}
{{--                                </div>--}}
{{--                                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">--}}
{{--                                    <h6 class="font-weight-bold mb-0">$593</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-8 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex flex-row justify-content-between">--}}
{{--                                <h4 class="card-title mb-1">Open Projects</h4>--}}
{{--                                <p class="text-muted mb-1">Your data status</p>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="preview-list">--}}
{{--                                        <div class="preview-item border-bottom">--}}
{{--                                            <div class="preview-thumbnail">--}}
{{--                                                <div class="preview-icon bg-primary">--}}
{{--                                                    <i class="mdi mdi-file-document"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="preview-item-content d-sm-flex flex-grow">--}}
{{--                                                <div class="flex-grow">--}}
{{--                                                    <h6 class="preview-subject">Admin dashboard design</h6>--}}
{{--                                                    <p class="text-muted mb-0">Broadcast web app mockup</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">--}}
{{--                                                    <p class="text-muted">15 minutes ago</p>--}}
{{--                                                    <p class="text-muted mb-0">30 tasks, 5 issues </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="preview-item border-bottom">--}}
{{--                                            <div class="preview-thumbnail">--}}
{{--                                                <div class="preview-icon bg-success">--}}
{{--                                                    <i class="mdi mdi-cloud-download"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="preview-item-content d-sm-flex flex-grow">--}}
{{--                                                <div class="flex-grow">--}}
{{--                                                    <h6 class="preview-subject">Wordpress Development</h6>--}}
{{--                                                    <p class="text-muted mb-0">Upload new design</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">--}}
{{--                                                    <p class="text-muted">1 hour ago</p>--}}
{{--                                                    <p class="text-muted mb-0">23 tasks, 5 issues </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="preview-item border-bottom">--}}
{{--                                            <div class="preview-thumbnail">--}}
{{--                                                <div class="preview-icon bg-info">--}}
{{--                                                    <i class="mdi mdi-clock"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="preview-item-content d-sm-flex flex-grow">--}}
{{--                                                <div class="flex-grow">--}}
{{--                                                    <h6 class="preview-subject">Project meeting</h6>--}}
{{--                                                    <p class="text-muted mb-0">New project discussion</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">--}}
{{--                                                    <p class="text-muted">35 minutes ago</p>--}}
{{--                                                    <p class="text-muted mb-0">15 tasks, 2 issues</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="preview-item border-bottom">--}}
{{--                                            <div class="preview-thumbnail">--}}
{{--                                                <div class="preview-icon bg-danger">--}}
{{--                                                    <i class="mdi mdi-email-open"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="preview-item-content d-sm-flex flex-grow">--}}
{{--                                                <div class="flex-grow">--}}
{{--                                                    <h6 class="preview-subject">Broadcast Mail</h6>--}}
{{--                                                    <p class="text-muted mb-0">Sent release details to team</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">--}}
{{--                                                    <p class="text-muted">55 minutes ago</p>--}}
{{--                                                    <p class="text-muted mb-0">35 tasks, 7 issues </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="preview-item">--}}
{{--                                            <div class="preview-thumbnail">--}}
{{--                                                <div class="preview-icon bg-warning">--}}
{{--                                                    <i class="mdi mdi-chart-pie"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="preview-item-content d-sm-flex flex-grow">--}}
{{--                                                <div class="flex-grow">--}}
{{--                                                    <h6 class="preview-subject">UI Design</h6>--}}
{{--                                                    <p class="text-muted mb-0">New application planning</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">--}}
{{--                                                    <p class="text-muted">50 minutes ago</p>--}}
{{--                                                    <p class="text-muted mb-0">27 tasks, 4 issues </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 grid-margin">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5>Revenue</h5>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-8 col-sm-12 col-xl-8 my-auto">--}}
{{--                                    <div class="d-flex d-sm-block d-md-flex align-items-center">--}}
{{--                                        <h2 class="mb-0">$32123</h2>--}}
{{--                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">--}}
{{--                                    <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 grid-margin">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5>Sales</h5>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-8 col-sm-12 col-xl-8 my-auto">--}}
{{--                                    <div class="d-flex d-sm-block d-md-flex align-items-center">--}}
{{--                                        <h2 class="mb-0">$45850</h2>--}}
{{--                                        <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">--}}
{{--                                    <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 grid-margin">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5>Purchase</h5>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-8 col-sm-12 col-xl-8 my-auto">--}}
{{--                                    <div class="d-flex d-sm-block d-md-flex align-items-center">--}}
{{--                                        <h2 class="mb-0">$2039</h2>--}}
{{--                                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>--}}
{{--                                    </div>--}}
{{--                                    <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">--}}
{{--                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row ">--}}
{{--                <div class="col-12 grid-margin">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Order Status</h4>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </th>--}}
{{--                                        <th> Client Name </th>--}}
{{--                                        <th> Order No </th>--}}
{{--                                        <th> Product Cost </th>--}}
{{--                                        <th> Project </th>--}}
{{--                                        <th> Payment Mode </th>--}}
{{--                                        <th> Start Date </th>--}}
{{--                                        <th> Payment Status </th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <img src="admin/assets/images/faces/face1.jpg" alt="image" />--}}
{{--                                            <span class="pl-2">Henry Klein</span>--}}
{{--                                        </td>--}}
{{--                                        <td> 02312 </td>--}}
{{--                                        <td> $14,500 </td>--}}
{{--                                        <td> Dashboard </td>--}}
{{--                                        <td> Credit card </td>--}}
{{--                                        <td> 04 Dec 2019 </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="badge badge-outline-success">Approved</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <img src="admin/assets/images/faces/face2.jpg" alt="image" />--}}
{{--                                            <span class="pl-2">Estella Bryan</span>--}}
{{--                                        </td>--}}
{{--                                        <td> 02312 </td>--}}
{{--                                        <td> $14,500 </td>--}}
{{--                                        <td> Website </td>--}}
{{--                                        <td> Cash on delivered </td>--}}
{{--                                        <td> 04 Dec 2019 </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="badge badge-outline-warning">Pending</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <img src="admin/assets/images/faces/face5.jpg" alt="image" />--}}
{{--                                            <span class="pl-2">Lucy Abbott</span>--}}
{{--                                        </td>--}}
{{--                                        <td> 02312 </td>--}}
{{--                                        <td> $14,500 </td>--}}
{{--                                        <td> App design </td>--}}
{{--                                        <td> Credit card </td>--}}
{{--                                        <td> 04 Dec 2019 </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="badge badge-outline-danger">Rejected</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <img src="admin/assets/images/faces/face3.jpg" alt="image" />--}}
{{--                                            <span class="pl-2">Peter Gill</span>--}}
{{--                                        </td>--}}
{{--                                        <td> 02312 </td>--}}
{{--                                        <td> $14,500 </td>--}}
{{--                                        <td> Development </td>--}}
{{--                                        <td> Online Payment </td>--}}
{{--                                        <td> 04 Dec 2019 </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="badge badge-outline-success">Approved</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-muted m-0">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input type="checkbox" class="form-check-input">--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <img src="admin/assets/images/faces/face4.jpg" alt="image" />--}}
{{--                                            <span class="pl-2">Sallie Reyes</span>--}}
{{--                                        </td>--}}
{{--                                        <td> 02312 </td>--}}
{{--                                        <td> $14,500 </td>--}}
{{--                                        <td> Website </td>--}}
{{--                                        <td> Credit card </td>--}}
{{--                                        <td> 04 Dec 2019 </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="badge badge-outline-success">Approved</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-xl-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex flex-row justify-content-between">--}}
{{--                                <h4 class="card-title">Messages</h4>--}}
{{--                                <p class="text-muted mb-1 small">View all</p>--}}
{{--                            </div>--}}
{{--                            <div class="preview-list">--}}
{{--                                <div class="preview-item border-bottom">--}}
{{--                                    <div class="preview-thumbnail">--}}
{{--                                        <img src="admin/assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />--}}
{{--                                    </div>--}}
{{--                                    <div class="preview-item-content d-flex flex-grow">--}}
{{--                                        <div class="flex-grow">--}}
{{--                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">--}}
{{--                                                <h6 class="preview-subject">Leonard</h6>--}}
{{--                                                <p class="text-muted text-small">5 minutes ago</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-muted">Well, it seems to be working now.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item border-bottom">--}}
{{--                                    <div class="preview-thumbnail">--}}
{{--                                        <img src="admin/assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />--}}
{{--                                    </div>--}}
{{--                                    <div class="preview-item-content d-flex flex-grow">--}}
{{--                                        <div class="flex-grow">--}}
{{--                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">--}}
{{--                                                <h6 class="preview-subject">Luella Mills</h6>--}}
{{--                                                <p class="text-muted text-small">10 Minutes Ago</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-muted">Well, it seems to be working now.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item border-bottom">--}}
{{--                                    <div class="preview-thumbnail">--}}
{{--                                        <img src="admin/assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />--}}
{{--                                    </div>--}}
{{--                                    <div class="preview-item-content d-flex flex-grow">--}}
{{--                                        <div class="flex-grow">--}}
{{--                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">--}}
{{--                                                <h6 class="preview-subject">Ethel Kelly</h6>--}}
{{--                                                <p class="text-muted text-small">2 Hours Ago</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-muted">Please review the tickets</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="preview-item border-bottom">--}}
{{--                                    <div class="preview-thumbnail">--}}
{{--                                        <img src="admin/assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />--}}
{{--                                    </div>--}}
{{--                                    <div class="preview-item-content d-flex flex-grow">--}}
{{--                                        <div class="flex-grow">--}}
{{--                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">--}}
{{--                                                <h6 class="preview-subject">Herman May</h6>--}}
{{--                                                <p class="text-muted text-small">4 Hours Ago</p>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-xl-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Portfolio Slide</h4>--}}
{{--                            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">--}}
{{--                                <div class="item">--}}
{{--                                    <img src="admin/assets/images/dashboard/Rectangle.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <img src="admin/assets/images/dashboard/Img_5.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <img src="admin/assets/images/dashboard/img_6.jpg" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex py-4">--}}
{{--                                <div class="preview-list w-100">--}}
{{--                                    <div class="preview-item p-0">--}}
{{--                                        <div class="preview-thumbnail">--}}
{{--                                            <img src="admin/assets/images/faces/face12.jpg" class="rounded-circle" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="preview-item-content d-flex flex-grow">--}}
{{--                                            <div class="flex-grow">--}}
{{--                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">--}}
{{--                                                    <h6 class="preview-subject">CeeCee Bass</h6>--}}
{{--                                                    <p class="text-muted text-small">4 Hours Ago</p>--}}
{{--                                                </div>--}}
{{--                                                <p class="text-muted">Well, it seems to be working now.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-muted">Well, it seems to be working now. </p>--}}
{{--                            <div class="progress progress-md portfolio-progress">--}}
{{--                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 col-xl-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">To do list</h4>--}}
{{--                            <div class="add-items d-flex">--}}
{{--                                <input type="text" class="form-control todo-list-input" placeholder="enter task..">--}}
{{--                                <button class="add btn btn-primary todo-list-add-btn">Add</button>--}}
{{--                            </div>--}}
{{--                            <div class="list-wrapper">--}}
{{--                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox"> Create invoice </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove mdi mdi-close-box"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove mdi mdi-close-box"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="completed">--}}
{{--                                        <div class="form-check form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove mdi mdi-close-box"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove mdi mdi-close-box"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove mdi mdi-close-box"></i>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Visitors by Countries</h4>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-5">--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table">--}}
{{--                                            <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-us"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>USA</td>--}}
{{--                                                <td class="text-right"> 1500 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 56.35% </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-de"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>Germany</td>--}}
{{--                                                <td class="text-right"> 800 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 33.25% </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-au"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>Australia</td>--}}
{{--                                                <td class="text-right"> 760 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 15.45% </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-gb"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>United Kingdom</td>--}}
{{--                                                <td class="text-right"> 450 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 25.00% </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-ro"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>Romania</td>--}}
{{--                                                <td class="text-right"> 620 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 10.25% </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>--}}
{{--                                                    <i class="flag-icon flag-icon-br"></i>--}}
{{--                                                </td>--}}
{{--                                                <td>Brasil</td>--}}
{{--                                                <td class="text-right"> 230 </td>--}}
{{--                                                <td class="text-right font-weight-medium"> 75.00% </td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <div id="audience-map" class="vector-map"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- content-wrapper ends -->--}}
{{--        <!-- partial:partials/_footer.html -->--}}
{{--        <footer class="footer">--}}
{{--            <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>--}}
{{--                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>--}}
{{--            </div>--}}
{{--        </footer>--}}





{{--==========================================================================================================--}}
{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>AdminLTE 3 | Dashboard</title>--}}

{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/fontawesome-free/css/all.min.css">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- Tempusdominus Bootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/jqvmap/jqvmap.min.css">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="Admin2/dist/css/adminlte.min.css">--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/daterangepicker/daterangepicker.css">--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="Admin2/plugins/summernote/summernote-bs4.min.css">--}}
{{--</head>--}}
{{--<body class="hold-transition sidebar-mini layout-fixed">--}}
{{--<div class="wrapper">--}}

{{--    <!-- Preloader -->--}}
{{--    <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--        <img class="animation__shake" src="Admin2/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">--}}
{{--    </div>--}}

{{--    <!-- Navbar -->--}}
{{--    <nav class="main-header navbar navbar-expand navbar-white navbar-light">--}}
{{--        <!-- Left navbar links -->--}}
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="Admin2/index3.html" class="nav-link">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="#" class="nav-link">Contact</a>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        <!-- Right navbar links -->--}}
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <!-- Navbar Search -->--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="navbar-search" href="#" role="button">--}}
{{--                    <i class="fas fa-search"></i>--}}
{{--                </a>--}}
{{--                <div class="navbar-search-block">--}}
{{--                    <form class="form-inline">--}}
{{--                        <div class="input-group input-group-sm">--}}
{{--                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn btn-navbar" type="submit">--}}
{{--                                    <i class="fas fa-search"></i>--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">--}}
{{--                                    <i class="fas fa-times"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <!-- Messages Dropdown Menu -->--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-comments"></i>--}}
{{--                    <span class="badge badge-danger navbar-badge">3</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="Admin2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Brad Diesel--}}
{{--                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="Admin2/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    John Pierce--}}
{{--                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">I got your message bro</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <!-- Message Start -->--}}
{{--                        <div class="media">--}}
{{--                            <img src="Admin2/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--                            <div class="media-body">--}}
{{--                                <h3 class="dropdown-item-title">--}}
{{--                                    Nora Silvester--}}
{{--                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
{{--                                </h3>--}}
{{--                                <p class="text-sm">The subject goes here</p>--}}
{{--                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Message End -->--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <!-- Notifications Dropdown Menu -->--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--                        <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                        <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="fullscreen" href="#" role="button">--}}
{{--                    <i class="fas fa-expand-arrows-alt"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
{{--                    <i class="fas fa-th-large"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--    <!-- /.navbar -->--}}

{{--    <!-- Main Sidebar Container -->--}}
{{--    <aside class="main-sidebar sidebar-dark-primary elevation-4">--}}
{{--        <!-- Brand Logo -->--}}
{{--        <a href="Admin2/index3.html" class="brand-link">--}}
{{--            <img src="Admin2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-light">AdminLTE 3</span>--}}
{{--        </a>--}}

{{--        <!-- Sidebar -->--}}
{{--        <div class="sidebar">--}}
{{--            <!-- Sidebar user panel (optional) -->--}}
{{--            <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--                <div class="image">--}}
{{--                    <img src="Admin2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--                </div>--}}
{{--                <div class="info">--}}
{{--                    <a href="#" class="d-block">Alexander Pierce</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- SidebarSearch Form -->--}}
{{--            <div class="form-inline">--}}
{{--                <div class="input-group" data-widget="sidebar-search">--}}
{{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button class="btn btn-sidebar">--}}
{{--                            <i class="fas fa-search fa-fw"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Sidebar Menu -->--}}
{{--            <nav class="mt-2">--}}
{{--                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">--}}
{{--                    <!-- Add icons to the links using the .nav-icon class--}}
{{--                         with font-awesome or any other icon font library -->--}}
{{--                    <li class="nav-item menu-open">--}}
{{--                        <a href="#" class="nav-link active">--}}
{{--                            <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                            <p>--}}
{{--                                Dashboard--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/./index.html" class="nav-link active">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v1</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/./index2.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/./index3.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v3</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="Admin2/pages/widgets.html" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-th"></i>--}}
{{--                            <p>--}}
{{--                                Widgets--}}
{{--                                <span class="right badge badge-danger">New</span>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-copy"></i>--}}
{{--                            <p>--}}
{{--                                Layout Options--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                                <span class="badge badge-info right">6</span>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/top-nav.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Top Navigation</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Top Navigation + Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/boxed.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Boxed</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/fixed-sidebar.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Fixed Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/fixed-sidebar-custom.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/fixed-topnav.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Fixed Navbar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/fixed-footer.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Fixed Footer</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/layout/collapsed-sidebar.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Collapsed Sidebar</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-chart-pie"></i>--}}
{{--                            <p>--}}
{{--                                Charts--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/charts/chartjs.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>ChartJS</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/charts/flot.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Flot</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/charts/inline.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Inline</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/charts/uplot.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>uPlot</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-tree"></i>--}}
{{--                            <p>--}}
{{--                                UI Elements--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/general.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>General</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/icons.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Icons</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/buttons.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Buttons</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/sliders.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Sliders</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/modals.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Modals & Alerts</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/navbar.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Navbar & Tabs</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/timeline.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Timeline</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/UI/ribbons.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Ribbons</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-edit"></i>--}}
{{--                            <p>--}}
{{--                                Forms--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/forms/general.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>General Elements</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/forms/advanced.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Advanced Elements</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/forms/editors.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Editors</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/forms/validation.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Validation</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-table"></i>--}}
{{--                            <p>--}}
{{--                                Tables--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/tables/simple.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Simple Tables</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/tables/data.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>DataTables</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/tables/jsgrid.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>jsGrid</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">EXAMPLES</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="Admin2/pages/calendar.html" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-calendar-alt"></i>--}}
{{--                            <p>--}}
{{--                                Calendar--}}
{{--                                <span class="badge badge-info right">2</span>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="Admin2/pages/gallery.html" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-image"></i>--}}
{{--                            <p>--}}
{{--                                Gallery--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="Admin2/pages/kanban.html" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-columns"></i>--}}
{{--                            <p>--}}
{{--                                Kanban Board--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-envelope"></i>--}}
{{--                            <p>--}}
{{--                                Mailbox--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/mailbox/mailbox.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Inbox</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/mailbox/compose.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Compose</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/mailbox/read-mail.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Read</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-book"></i>--}}
{{--                            <p>--}}
{{--                                Pages--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/invoice.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Invoice</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/profile.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Profile</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/e-commerce.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>E-commerce</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/projects.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Projects</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/project-add.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Project Add</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/project-edit.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Project Edit</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/project-detail.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Project Detail</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/contacts.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Contacts</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/faq.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>FAQ</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/contact-us.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Contact us</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-plus-square"></i>--}}
{{--                            <p>--}}
{{--                                Extras--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>--}}
{{--                                        Login & Register v1--}}
{{--                                        <i class="fas fa-angle-left right"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/login.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Login v1</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/register.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Register v1</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/forgot-password.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Forgot Password v1</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/recover-password.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Recover Password v1</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>--}}
{{--                                        Login & Register v2--}}
{{--                                        <i class="fas fa-angle-left right"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/login-v2.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Login v2</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/register-v2.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Register v2</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/forgot-password-v2.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Forgot Password v2</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="Admin2/pages/examples/recover-password-v2.html" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>Recover Password v2</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/lockscreen.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Lockscreen</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/legacy-user-menu.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Legacy User Menu</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/language-menu.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Language Menu</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/404.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Error 404</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/500.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Error 500</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/pace.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Pace</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/examples/blank.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Blank Page</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="starter.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Starter Page</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-search"></i>--}}
{{--                            <p>--}}
{{--                                Search--}}
{{--                                <i class="fas fa-angle-left right"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/search/simple.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Simple Search</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="Admin2/pages/search/enhanced.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Enhanced</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">MISCELLANEOUS</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="iframe.html" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-ellipsis-h"></i>--}}
{{--                            <p>Tabbed IFrame Plugin</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://adminlte.io/docs/3.1/" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-file"></i>--}}
{{--                            <p>Documentation</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="fas fa-circle nav-icon"></i>--}}
{{--                            <p>Level 1</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-circle"></i>--}}
{{--                            <p>--}}
{{--                                Level 1--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Level 2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>--}}
{{--                                        Level 2--}}
{{--                                        <i class="right fas fa-angle-left"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#" class="nav-link">--}}
{{--                                            <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                            <p>Level 3</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Level 2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="fas fa-circle nav-icon"></i>--}}
{{--                            <p>Level 1</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-header">LABELS</li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-circle text-danger"></i>--}}
{{--                            <p class="text">Important</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-circle text-warning"></i>--}}
{{--                            <p>Warning</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-circle text-info"></i>--}}
{{--                            <p>Informational</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <!-- /.sidebar-menu -->--}}
{{--        </div>--}}
{{--        <!-- /.sidebar -->--}}
{{--    </aside>--}}

{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <div class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1 class="m-0">Dashboard</h1>--}}
{{--                    </div><!-- /.col -->--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
{{--                </div><!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </div>--}}
{{--        <!-- /.content-header -->--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <!-- Small boxes (Stat box) -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>150</h3>--}}

{{--                                <p>New Orders</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                                <p>Bounce Rate</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>44</h3>--}}

{{--                                <p>User Registrations</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>65</h3>--}}

{{--                                <p>Unique Visitors</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--                <!-- Main row -->--}}
{{--                <div class="row">--}}
{{--                    <!-- Left col -->--}}
{{--                    <section class="col-lg-7 connectedSortable">--}}
{{--                        <!-- Custom tabs (Charts with tabs)-->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="fas fa-chart-pie mr-1"></i>--}}
{{--                                    Sales--}}
{{--                                </h3>--}}
{{--                                <div class="card-tools">--}}
{{--                                    <ul class="nav nav-pills ml-auto">--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div><!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="tab-content p-0">--}}
{{--                                    <!-- Morris chart - Sales -->--}}
{{--                                    <div class="chart tab-pane active" id="revenue-chart"--}}
{{--                                         style="position: relative; height: 300px;">--}}
{{--                                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
{{--                                    </div>--}}
{{--                                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">--}}
{{--                                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- DIRECT CHAT -->--}}
{{--                        <div class="card direct-chat direct-chat-primary">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Direct Chat</h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <span title="3 New Messages" class="badge badge-primary">3</span>--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">--}}
{{--                                        <i class="fas fa-comments"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <!-- Conversations are loaded here -->--}}
{{--                                <div class="direct-chat-messages">--}}
{{--                                    <!-- Message. Default to the left -->--}}
{{--                                    <div class="direct-chat-msg">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
{{--                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="Admin2/dist/img/user1-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            Is this template really for free? That's unbelievable!--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message to the right -->--}}
{{--                                    <div class="direct-chat-msg right">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
{{--                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="Admin2/dist/img/user3-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            You better believe it!--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message. Default to the left -->--}}
{{--                                    <div class="direct-chat-msg">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
{{--                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="Admin2/dist/img/user1-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            Working with AdminLTE on a great new app! Wanna join?--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                    <!-- Message to the right -->--}}
{{--                                    <div class="direct-chat-msg right">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
{{--                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-infos -->--}}
{{--                                        <img class="direct-chat-img" src="Admin2/dist/img/user3-128x128.jpg" alt="message user image">--}}
{{--                                        <!-- /.direct-chat-img -->--}}
{{--                                        <div class="direct-chat-text">--}}
{{--                                            I would love to.--}}
{{--                                        </div>--}}
{{--                                        <!-- /.direct-chat-text -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.direct-chat-msg -->--}}

{{--                                </div>--}}
{{--                                <!--/.direct-chat-messages-->--}}

{{--                                <!-- Contacts are loaded here -->--}}
{{--                                <div class="direct-chat-contacts">--}}
{{--                                    <ul class="contacts-list">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user1-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Count Dracula--}}
{{--                            <small class="contacts-list-date float-right">2/28/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">How have you been? I was...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user7-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Sarah Doe--}}
{{--                            <small class="contacts-list-date float-right">2/23/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">I will be waiting for...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user3-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Nadia Jolie--}}
{{--                            <small class="contacts-list-date float-right">2/20/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">I'll call you back at...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user5-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Nora S. Vans--}}
{{--                            <small class="contacts-list-date float-right">2/10/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Where is your new...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user6-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            John K.--}}
{{--                            <small class="contacts-list-date float-right">1/27/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Can I take a look at...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <img class="contacts-list-img" src="Admin2/dist/img/user8-128x128.jpg" alt="User Avatar">--}}

{{--                                                <div class="contacts-list-info">--}}
{{--                          <span class="contacts-list-name">--}}
{{--                            Kenneth M.--}}
{{--                            <small class="contacts-list-date float-right">1/4/2015</small>--}}
{{--                          </span>--}}
{{--                                                    <span class="contacts-list-msg">Never mind I found...</span>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.contacts-list-info -->--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- End Contact Item -->--}}
{{--                                    </ul>--}}
{{--                                    <!-- /.contacts-list -->--}}
{{--                                </div>--}}
{{--                                <!-- /.direct-chat-pane -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer">--}}
{{--                                <form action="#" method="post">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">--}}
{{--                                        <span class="input-group-append">--}}
{{--                      <button type="button" class="btn btn-primary">Send</button>--}}
{{--                    </span>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-footer-->--}}
{{--                        </div>--}}
{{--                        <!--/.direct-chat -->--}}

{{--                        <!-- TO DO List -->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="ion ion-clipboard mr-1"></i>--}}
{{--                                    To Do List--}}
{{--                                </h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <ul class="pagination pagination-sm">--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">3</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <ul class="todo-list" data-widget="todo-list">--}}
{{--                                    <li>--}}
{{--                                        <!-- drag handle -->--}}
{{--                                        <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <!-- checkbox -->--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo1" id="todoCheck1">--}}
{{--                                            <label for="todoCheck1"></label>--}}
{{--                                        </div>--}}
{{--                                        <!-- todo text -->--}}
{{--                                        <span class="text">Design a nice theme</span>--}}
{{--                                        <!-- Emphasis label -->--}}
{{--                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>--}}
{{--                                        <!-- General tools such as edit or delete-->--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>--}}
{{--                                            <label for="todoCheck2"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Make the theme responsive</span>--}}
{{--                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo3" id="todoCheck3">--}}
{{--                                            <label for="todoCheck3"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">--}}
{{--                                            <label for="todoCheck4"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo5" id="todoCheck5">--}}
{{--                                            <label for="todoCheck5"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Check your messages and notifications</span>--}}
{{--                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                    <span class="handle">--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                    </span>--}}
{{--                                        <div  class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo6" id="todoCheck6">--}}
{{--                                            <label for="todoCheck6"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer clearfix">--}}
{{--                                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </section>--}}
{{--                    <!-- /.Left col -->--}}
{{--                    <!-- right col (We are only adding the ID to make the widgets sortable)-->--}}
{{--                    <section class="col-lg-5 connectedSortable">--}}

{{--                        <!-- Map card -->--}}
{{--                        <div class="card bg-gradient-primary">--}}
{{--                            <div class="card-header border-0">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="fas fa-map-marker-alt mr-1"></i>--}}
{{--                                    Visitors--}}
{{--                                </h3>--}}
{{--                                <!-- card tools -->--}}
{{--                                <div class="card-tools">--}}
{{--                                    <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">--}}
{{--                                        <i class="far fa-calendar-alt"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-tools -->--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div id="world-map" style="height: 250px; width: 100%;"></div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body-->--}}
{{--                            <div class="card-footer bg-transparent">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-1"></div>--}}
{{--                                        <div class="text-white">Visitors</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-2"></div>--}}
{{--                                        <div class="text-white">Online</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <div id="sparkline-3"></div>--}}
{{--                                        <div class="text-white">Sales</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- solid sales graph -->--}}
{{--                        <div class="card bg-gradient-info">--}}
{{--                            <div class="card-header border-0">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="fas fa-th mr-1"></i>--}}
{{--                                    Sales Graph--}}
{{--                                </h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer bg-transparent">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">Mail-Orders</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">Online</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                    <div class="col-4 text-center">--}}
{{--                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"--}}
{{--                                               data-fgColor="#39CCCC">--}}

{{--                                        <div class="text-white">In-Store</div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ./col -->--}}
{{--                                </div>--}}
{{--                                <!-- /.row -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-footer -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                        <!-- Calendar -->--}}
{{--                        <div class="card bg-gradient-success">--}}
{{--                            <div class="card-header border-0">--}}

{{--                                <h3 class="card-title">--}}
{{--                                    <i class="far fa-calendar-alt"></i>--}}
{{--                                    Calendar--}}
{{--                                </h3>--}}
{{--                                <!-- tools card -->--}}
{{--                                <div class="card-tools">--}}
{{--                                    <!-- button with a dropdown -->--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">--}}
{{--                                            <i class="fas fa-bars"></i>--}}
{{--                                        </button>--}}
{{--                                        <div class="dropdown-menu" role="menu">--}}
{{--                                            <a href="#" class="dropdown-item">Add new event</a>--}}
{{--                                            <a href="#" class="dropdown-item">Clear events</a>--}}
{{--                                            <div class="dropdown-divider"></div>--}}
{{--                                            <a href="#" class="dropdown-item">View calendar</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">--}}
{{--                                        <i class="fas fa-minus"></i>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">--}}
{{--                                        <i class="fas fa-times"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!-- /. tools -->--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body pt-0">--}}
{{--                                <!--The calendar -->--}}
{{--                                <div id="calendar" style="width: 100%"></div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </section>--}}
{{--                    <!-- right col -->--}}
{{--                </div>--}}
{{--                <!-- /.row (main row) -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}
{{--    <footer class="main-footer">--}}
{{--        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>--}}
{{--        All rights reserved.--}}
{{--        <div class="float-right d-none d-sm-inline-block">--}}
{{--            <b>Version</b> 3.1.0--}}
{{--        </div>--}}
{{--    </footer>--}}

{{--    <!-- Control Sidebar -->--}}
{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <!-- Control sidebar content goes here -->--}}
{{--    </aside>--}}
{{--    <!-- /.control-sidebar -->--}}
{{--</div>--}}
{{--<!-- ./wrapper -->--}}

{{--<!-- jQuery -->--}}
{{--<script src="Admin2/plugins/jquery/jquery.min.js"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="Admin2/plugins/jquery-ui/jquery-ui.min.js"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="Admin2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- ChartJS -->--}}
{{--<script src="Admin2/plugins/chart.js/Chart.min.js"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="Admin2/plugins/sparklines/sparkline.js"></script>--}}
{{--<!-- JQVMap -->--}}
{{--<script src="Admin2/plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--<script src="Admin2/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="Admin2/plugins/jquery-knob/jquery.knob.min.js"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="Admin2/plugins/moment/moment.min.js"></script>--}}
{{--<script src="Admin2/plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--<!-- Tempusdominus Bootstrap 4 -->--}}
{{--<script src="Admin2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>--}}
{{--<!-- Summernote -->--}}
{{--<script src="Admin2/plugins/summernote/summernote-bs4.min.js"></script>--}}
{{--<!-- overlayScrollbars -->--}}
{{--<script src="Admin2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="Admin2/dist/js/adminlte.js"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="Admin2/dist/js/demo.js"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="Admin2/dist/js/pages/dashboard.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
