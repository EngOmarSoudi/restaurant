



<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
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
                            <form action="{{url('/searchorder')}}" method="get" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
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

<!-- partial:../../partials/_sidebar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->

        <!-- partial -->
        {{--        <div class="main-panel">--}}
        <div class="content-wrapper">
            <div class="row ">

                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order Status</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        <th> Client Name </th>
                                        <th> Food Name </th>

                                        <th> Phone </th>
                                        <th> Price </th>
                                        <th> quantity </th>
                                        <th> Address </th>
                                        <th> message </th>
                                        <th> action </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $data)
                                        <tr>

                                            <td>
                                                {{$data->name}}
                                            </td>
                                            <td> {{$data->foodname}} </td>
                                            <td> {{$data->phone}} </td>
                                            <td> ${{$data->price}} </td>
                                            <td> {{$data->quantity}} </td>
                                            <td> {{$data->address}} </td>
                                            <td> ${{$data->price * $data->quantity}}   </td>
                                            <td>
                                                <div class="badge badge-outline-success">Approved</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="form-check form-check-muted m-0">--}}
                                    {{--                                                <label class="form-check-label">--}}
                                    {{--                                                    <input type="checkbox" class="form-check-input">--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <img src="assets/images/faces/face2.jpg" alt="image" />--}}
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
                                    {{--                                            <img src="assets/images/faces/face5.jpg" alt="image" />--}}
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
                                    {{--                                            <img src="assets/images/faces/face3.jpg" alt="image" />--}}
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
                                    {{--                                            <img src="assets/images/faces/face4.jpg" alt="image" />--}}
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--                <div class="page-header">--}}
            {{--                    <h3 class="page-title"> Basic Tables </h3>--}}
            {{--                    <nav aria-label="breadcrumb">--}}
            {{--                        <ol class="breadcrumb">--}}
            {{--                            <li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
            {{--                            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>--}}
            {{--                        </ol>--}}
            {{--                    </nav>--}}
            {{--                </div>--}}

            {{--            <div class="row">--}}
            {{--                <div class="col-lg-12 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h4 class="card-title">Striped Table</h4>--}}
            {{--                            <p class="card-description"> Add class <code>.table-striped</code>--}}
            {{--                            </p>--}}
            {{--                            <div class="table-responsive">--}}
            {{--                                <table class="table table-striped">--}}
            {{--                                    <thead>--}}
            {{--                                    <tr>--}}
            {{--                                        <th> User </th>--}}
            {{--                                        <th> First name </th>--}}
            {{--                                        <th> email </th>--}}
            {{--                                        <th> action </th>--}}
            {{--                                        <th> Deadline </th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}

            {{--                                    <tbody>@foreach($data as $data)--}}
            {{--                                        <tr>--}}
            {{--                                            <td class="py-1">--}}
            {{--                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />--}}
            {{--                                            </td>--}}
            {{--                                            <td>{{$data->name}}</td>--}}
            {{--                                            <td>--}}
            {{--                                                {{$data->email}}--}}

            {{--                                            </td>--}}
            {{--                                            @if($data->usertype=="0")--}}
            {{--                                                <td>--}}
            {{--                                                    <a href="{{url('/deleteusers',$data->id)}}"><label class="badge badge-danger">delete</label></a>--}}
            {{--                                                </td>--}}
            {{--                                            @else--}}
            {{--                                                <td>--}}
            {{--                                                    <label class="badge badge-info">Not Allowed</label>--}}
            {{--                                                </td>--}}
            {{--                                            @endif--}}
            {{--                                            <td> {{$data->created_at}} </td>--}}
            {{--                                        </tr>--}}

            {{--                                    </tbody>@endforeach--}}
            {{--                                </table>--}}

            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-6 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h4 class="card-title">Basic Table</h4>--}}
            {{--                            <p class="card-description"> Add class <code>.table</code>--}}
            {{--                            </p>--}}
            {{--                            <div class="table-responsive">--}}
            {{--                                <table class="table">--}}
            {{--                                    <thead>--}}
            {{--                                    <tr>--}}
            {{--                                        <th>Profile</th>--}}
            {{--                                        <th>VatNo.</th>--}}
            {{--                                        <th>Created</th>--}}
            {{--                                        <th>Status</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> Messsy Adam </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $245.30 </td>--}}
            {{--                                        <td> July 1, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> John Richards </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $138.00 </td>--}}
            {{--                                        <td> Apr 12, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> Peter Meggik </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $ 77.99 </td>--}}
            {{--                                        <td> May 15, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> Edward </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $ 160.25 </td>--}}
            {{--                                        <td> May 03, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> John Doe </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $ 123.21 </td>--}}
            {{--                                        <td> April 05, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td class="py-1">--}}
            {{--                                            <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> Henry Tom </td>--}}
            {{--                                        <td>--}}
            {{--                                            <div class="progress">--}}
            {{--                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                            </div>--}}
            {{--                                        </td>--}}
            {{--                                        <td> $ 150.00 </td>--}}
            {{--                                        <td> June 16, 2015 </td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Jacob</td>--}}
            {{--                                        <td>53275531</td>--}}
            {{--                                        <td>12 May 2017</td>--}}
            {{--                                        <td><label class="badge badge-danger">Pending</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Messsy</td>--}}
            {{--                                        <td>53275532</td>--}}
            {{--                                        <td>15 May 2017</td>--}}
            {{--                                        <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>John</td>--}}
            {{--                                        <td>53275533</td>--}}
            {{--                                        <td>14 May 2017</td>--}}
            {{--                                        <td><label class="badge badge-info">Fixed</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Peter</td>--}}
            {{--                                        <td>53275534</td>--}}
            {{--                                        <td>16 May 2017</td>--}}
            {{--                                        <td><label class="badge badge-success">Completed</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Dave</td>--}}
            {{--                                        <td>53275535</td>--}}
            {{--                                        <td>20 May 2017</td>--}}
            {{--                                        <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-6 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h4 class="card-title">Hoverable Table</h4>--}}
            {{--                            <p class="card-description"> Add class <code>.table-hover</code>--}}
            {{--                            </p>--}}
            {{--                            <div class="table-responsive">--}}
            {{--                                <table class="table table-hover">--}}
            {{--                                    <thead>--}}
            {{--                                    <tr>--}}
            {{--                                        <th>User</th>--}}
            {{--                                        <th>Product</th>--}}
            {{--                                        <th>Sale</th>--}}
            {{--                                        <th>Status</th>--}}
            {{--                                    </tr>--}}
            {{--                                    </thead>--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Jacob</td>--}}
            {{--                                        <td>Photoshop</td>--}}
            {{--                                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>--}}
            {{--                                        <td><label class="badge badge-danger">Pending</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Messsy</td>--}}
            {{--                                        <td>Flash</td>--}}
            {{--                                        <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>--}}
            {{--                                        <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>John</td>--}}
            {{--                                        <td>Premier</td>--}}
            {{--                                        <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>--}}
            {{--                                        <td><label class="badge badge-info">Fixed</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Peter</td>--}}
            {{--                                        <td>After effects</td>--}}
            {{--                                        <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>--}}
            {{--                                        <td><label class="badge badge-success">Completed</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>Dave</td>--}}
            {{--                                        <td>53275535</td>--}}
            {{--                                        <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>--}}
            {{--                                        <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                --}}{{--                    <div class="col-lg-12 grid-margin stretch-card">--}}
            {{--                --}}{{--                        <div class="card">--}}
            {{--                --}}{{--                            <div class="card-body">--}}
            {{--                --}}{{--                                <h4 class="card-title">Bordered table</h4>--}}
            {{--                --}}{{--                                <p class="card-description"> Add class <code>.table-bordered</code>--}}
            {{--                --}}{{--                                </p>--}}
            {{--                --}}{{--                                <div class="table-responsive">--}}
            {{--                --}}{{--                                    <table class="table table-bordered">--}}
            {{--                --}}{{--                                        <thead>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <th> # </th>--}}
            {{--                --}}{{--                                            <th> First name </th>--}}
            {{--                --}}{{--                                            <th> Progress </th>--}}
            {{--                --}}{{--                                            <th> Amount </th>--}}
            {{--                --}}{{--                                            <th> Deadline </th>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </thead>--}}
            {{--                --}}{{--                                        <tbody>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 1 </td>--}}
            {{--                --}}{{--                                            <td> Herman Beck </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 2 </td>--}}
            {{--                --}}{{--                                            <td> Messsy Adam </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $245.30 </td>--}}
            {{--                --}}{{--                                            <td> July 1, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 3 </td>--}}
            {{--                --}}{{--                                            <td> John Richards </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $138.00 </td>--}}
            {{--                --}}{{--                                            <td> Apr 12, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 4 </td>--}}
            {{--                --}}{{--                                            <td> Peter Meggik </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 5 </td>--}}
            {{--                --}}{{--                                            <td> Edward </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $ 160.25 </td>--}}
            {{--                --}}{{--                                            <td> May 03, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 6 </td>--}}
            {{--                --}}{{--                                            <td> John Doe </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $ 123.21 </td>--}}
            {{--                --}}{{--                                            <td> April 05, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 7 </td>--}}
            {{--                --}}{{--                                            <td> Henry Tom </td>--}}
            {{--                --}}{{--                                            <td>--}}
            {{--                --}}{{--                                                <div class="progress">--}}
            {{--                --}}{{--                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                --}}{{--                                                </div>--}}
            {{--                --}}{{--                                            </td>--}}
            {{--                --}}{{--                                            <td> $ 150.00 </td>--}}
            {{--                --}}{{--                                            <td> June 16, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </tbody>--}}
            {{--                --}}{{--                                    </table>--}}
            {{--                --}}{{--                                </div>--}}
            {{--                --}}{{--                            </div>--}}
            {{--                --}}{{--                        </div>--}}
            {{--                --}}{{--                    </div>--}}
            {{--                --}}{{--                    <div class="col-lg-12 grid-margin stretch-card">--}}
            {{--                --}}{{--                        <div class="card">--}}
            {{--                --}}{{--                            <div class="card-body">--}}
            {{--                --}}{{--                                <h4 class="card-title">Inverse table</h4>--}}
            {{--                --}}{{--                                <p class="card-description"> Add class <code>.table-dark</code>--}}
            {{--                --}}{{--                                </p>--}}
            {{--                --}}{{--                                <div class="table-responsive">--}}
            {{--                --}}{{--                                    <table class="table table-dark">--}}
            {{--                --}}{{--                                        <thead>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <th> # </th>--}}
            {{--                --}}{{--                                            <th> First name </th>--}}
            {{--                --}}{{--                                            <th> Amount </th>--}}
            {{--                --}}{{--                                            <th> Deadline </th>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </thead>--}}
            {{--                --}}{{--                                        <tbody>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 1 </td>--}}
            {{--                --}}{{--                                            <td> Herman Beck </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 2 </td>--}}
            {{--                --}}{{--                                            <td> Messsy Adam </td>--}}
            {{--                --}}{{--                                            <td> $245.30 </td>--}}
            {{--                --}}{{--                                            <td> July 1, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 3 </td>--}}
            {{--                --}}{{--                                            <td> John Richards </td>--}}
            {{--                --}}{{--                                            <td> $138.00 </td>--}}
            {{--                --}}{{--                                            <td> Apr 12, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 4 </td>--}}
            {{--                --}}{{--                                            <td> Peter Meggik </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 5 </td>--}}
            {{--                --}}{{--                                            <td> Edward </td>--}}
            {{--                --}}{{--                                            <td> $ 160.25 </td>--}}
            {{--                --}}{{--                                            <td> May 03, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 6 </td>--}}
            {{--                --}}{{--                                            <td> John Doe </td>--}}
            {{--                --}}{{--                                            <td> $ 123.21 </td>--}}
            {{--                --}}{{--                                            <td> April 05, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <td> 7 </td>--}}
            {{--                --}}{{--                                            <td> Henry Tom </td>--}}
            {{--                --}}{{--                                            <td> $ 150.00 </td>--}}
            {{--                --}}{{--                                            <td> June 16, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </tbody>--}}
            {{--                --}}{{--                                    </table>--}}
            {{--                --}}{{--                                </div>--}}
            {{--                --}}{{--                            </div>--}}
            {{--                --}}{{--                        </div>--}}
            {{--                --}}{{--                    </div>--}}
            {{--                --}}{{--                    <div class="col-lg-12 stretch-card">--}}
            {{--                --}}{{--                        <div class="card">--}}
            {{--                --}}{{--                            <div class="card-body">--}}
            {{--                --}}{{--                                <h4 class="card-title">Table with contextual classes</h4>--}}
            {{--                --}}{{--                                <p class="card-description"> Add class <code>.table-{color}</code>--}}
            {{--                --}}{{--                                </p>--}}
            {{--                --}}{{--                                <div class="table-responsive">--}}
            {{--                --}}{{--                                    <table class="table table-bordered table-contextual">--}}
            {{--                --}}{{--                                        <thead>--}}
            {{--                --}}{{--                                        <tr>--}}
            {{--                --}}{{--                                            <th> # </th>--}}
            {{--                --}}{{--                                            <th> First name </th>--}}
            {{--                --}}{{--                                            <th> Product </th>--}}
            {{--                --}}{{--                                            <th> Amount </th>--}}
            {{--                --}}{{--                                            <th> Deadline </th>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </thead>--}}
            {{--                --}}{{--                                        <tbody>--}}
            {{--                --}}{{--                                        <tr class="table-info">--}}
            {{--                --}}{{--                                            <td> 1 </td>--}}
            {{--                --}}{{--                                            <td> Herman Beck </td>--}}
            {{--                --}}{{--                                            <td> Photoshop </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr class="table-warning">--}}
            {{--                --}}{{--                                            <td> 2 </td>--}}
            {{--                --}}{{--                                            <td> Messsy Adam </td>--}}
            {{--                --}}{{--                                            <td> Flash </td>--}}
            {{--                --}}{{--                                            <td> $245.30 </td>--}}
            {{--                --}}{{--                                            <td> July 1, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr class="table-danger">--}}
            {{--                --}}{{--                                            <td> 3 </td>--}}
            {{--                --}}{{--                                            <td> John Richards </td>--}}
            {{--                --}}{{--                                            <td> Premeire </td>--}}
            {{--                --}}{{--                                            <td> $138.00 </td>--}}
            {{--                --}}{{--                                            <td> Apr 12, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr class="table-success">--}}
            {{--                --}}{{--                                            <td> 4 </td>--}}
            {{--                --}}{{--                                            <td> Peter Meggik </td>--}}
            {{--                --}}{{--                                            <td> After effects </td>--}}
            {{--                --}}{{--                                            <td> $ 77.99 </td>--}}
            {{--                --}}{{--                                            <td> May 15, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        <tr class="table-primary">--}}
            {{--                --}}{{--                                            <td> 5 </td>--}}
            {{--                --}}{{--                                            <td> Edward </td>--}}
            {{--                --}}{{--                                            <td> Illustrator </td>--}}
            {{--                --}}{{--                                            <td> $ 160.25 </td>--}}
            {{--                --}}{{--                                            <td> May 03, 2015 </td>--}}
            {{--                --}}{{--                                        </tr>--}}
            {{--                --}}{{--                                        </tbody>--}}
            {{--                --}}{{--                                    </table>--}}
            {{--                --}}{{--                                </div>--}}
            {{--                --}}{{--                            </div>--}}
            {{--                --}}{{--                        </div>--}}
            {{--                --}}{{--                    </div>--}}
            {{--            </div>--}}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
@include("admin.adminscript")
</div>


{{--<div class="container-scroller">--}}





{{--</div>--}}
</body>
</html>

