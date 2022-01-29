

<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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

    <!-- partial:../../partials/_sidebar.html -->

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->

        <!-- partial -->
        {{--        <div class="main-panel">--}}
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description"> Basic form elements </p>
{{--                        @foreach($data as $data)--}}
                        <form class="forms-sample" action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{$data->name}}" required>
{{--                                @error('title')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">title</label>
                                <input type="text" class="form-control" name="speciality" id="exampleInputName1" value="{{$data->speciality}}" required>
{{--                                @error('title')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
                            </div><div class="form-group">
                                <label for="exampleInputName1">title</label>
                                <input type="text" class="form-control" name="facebook" id="exampleInputName1" value="{{$data->facebook}}" required>
{{--                                @error('title')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">title</label>
                                <input type="text" class="form-control" name="social" id="exampleInputName1" value="{{$data->social}}" required>
{{--                                @error('title')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">title</label>
                                <input type="text" class="form-control" name="twitter" id="exampleInputName1" value="{{$data->twitter}}" required>
{{--                                @error('title')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
                            </div>


                            <div class="form-group">
                                <label>New Image</label>
                                <input type="file" name="image"  class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">old image</label>
                                <img src="/chefimage/{{$data->image}}" alt="">
                                {{--                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>--}}
                            </div>
                            <button type="submit" value="update chef" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            {{--            <div class="col-lg-12 grid-margin stretch-card">--}}
            {{--                <div class="card">--}}
            {{--                    <div class="card-body">--}}
            {{--                        <h4 class="card-title">Basic Table</h4>--}}
            {{--                        <p class="card-description"> Add class <code>.table</code>--}}
            {{--                        </p>--}}
            {{--                        <div class="table-responsive">--}}
            {{--                            <table class="table">--}}
            {{--                                <thead>--}}
            {{--                                <tr>--}}
            {{--                                    <th>IMAGE</th>--}}
            {{--                                    <th>FOOD NAME</th>--}}
            {{--                                    <th>PRICE</th>--}}
            {{--                                    <th>description</th>--}}
            {{--                                    --}}{{--                                        <th>PROGREES</th>--}}
            {{--                                    <th>action</th>--}}
            {{--                                </tr>--}}
            {{--                                </thead>--}}
            {{--                                <tbody>--}}
            {{--                                @foreach($data as $d)--}}
            {{--                                    <tr>--}}
            {{--                                        <td  >--}}
            {{--                                            <img style="height:150px;width:150px;border-radius: 20px" src="/foodimage/{{$d->image}}" alt="image" />--}}
            {{--                                        </td>--}}
            {{--                                        <td> {{$d->title}} </td>--}}

            {{--                                        <td> $ {{$d->price}}  </td>--}}
            {{--                                        <td>  {{$d->description}}  </td>--}}
            {{--                                        --}}{{--                                        <td>--}}
            {{--                                        --}}{{--                                            <div class="progress">--}}
            {{--                                        --}}{{--                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        --}}{{--                                            </div>--}}
            {{--                                        --}}{{--                                        </td>--}}

            {{--                                        <td><a href="{{url('/deletefood',$d->id)}}"><label class="badge badge-danger">delete</label></a></td>--}}
            {{--                                        <td><a href="{{url('/updateview',$d->id)}}"><label class="badge badge-success">Update</label></a></td>--}}
            {{--                                    </tr>--}}
            {{--                                @endforeach--}}
            {{--                                <tr>--}}
            {{--                                    <td class="py-1">--}}
            {{--                                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />--}}
            {{--                                    </td>--}}
            {{--                                    <td> John Richards </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="progress">--}}
            {{--                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td> $138.00 </td>--}}
            {{--                                    <td> Apr 12, 2015 </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="py-1">--}}
            {{--                                        <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />--}}
            {{--                                    </td>--}}
            {{--                                    <td> Peter Meggik </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="progress">--}}
            {{--                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td> $ 77.99 </td>--}}
            {{--                                    <td> May 15, 2015 </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="py-1">--}}
            {{--                                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />--}}
            {{--                                    </td>--}}
            {{--                                    <td> Edward </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="progress">--}}
            {{--                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td> $ 160.25 </td>--}}
            {{--                                    <td> May 03, 2015 </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="py-1">--}}
            {{--                                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />--}}
            {{--                                    </td>--}}
            {{--                                    <td> John Doe </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="progress">--}}
            {{--                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td> $ 123.21 </td>--}}
            {{--                                    <td> April 05, 2015 </td>--}}
            {{--                                </tr>--}}

            {{--                                <tr>--}}
            {{--                                    <td class="py-1">--}}
            {{--                                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />--}}
            {{--                                    </td>--}}
            {{--                                    <td> Henry Tom </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="progress">--}}
            {{--                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td> $ 150.00 </td>--}}
            {{--                                    <td> June 16, 2015 </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td>Jacob</td>--}}
            {{--                                    <td>53275531</td>--}}
            {{--                                    <td>12 May 2017</td>--}}
            {{--                                    <td><label class="badge badge-danger">Pending</label></td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td>Messsy</td>--}}
            {{--                                    <td>53275532</td>--}}
            {{--                                    <td>15 May 2017</td>--}}
            {{--                                    <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td>John</td>--}}
            {{--                                    <td>53275533</td>--}}
            {{--                                    <td>14 May 2017</td>--}}
            {{--                                    <td><label class="badge badge-info">Fixed</label></td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td>Peter</td>--}}
            {{--                                    <td>53275534</td>--}}
            {{--                                    <td>16 May 2017</td>--}}
            {{--                                    <td><label class="badge badge-success">Completed</label></td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td>Dave</td>--}}
            {{--                                    <td>53275535</td>--}}
            {{--                                    <td>20 May 2017</td>--}}
            {{--                                    <td><label class="badge badge-warning">In progress</label></td>--}}
            {{--                                </tr>--}}
            {{--                                </tbody>--}}
            {{--                            </table>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--<div class="row">--}}
            {{--    <div class="col-lg-12 grid-margin stretch-card">--}}
            {{--        <div class="card">--}}
            {{--            <div class="card-body">--}}
            {{--                <h4 class="card-title">Striped Table</h4>--}}
            {{--                <p class="card-description"> Add class <code>.table-striped</code>--}}
            {{--                </p>--}}
            {{--                <div class="table-responsive">--}}
            {{--                    <table class="table table-striped">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th> User </th>--}}
            {{--                            <th> First name </th>--}}
            {{--                            <th> email </th>--}}
            {{--                            <th> action </th>--}}
            {{--                            <th> Deadline </th>--}}
            {{--                        </tr>--}}
            {{--                        </thead>--}}

            {{--                        <tbody>--}}
            {{--                        @foreach($data as $data)--}}
            {{--                        <tr>--}}
            {{--                            <td class="py-1">--}}
            {{--                                <img src="../../admin/assets/images/faces-clipart/pic-1.png" alt="image" />--}}
            {{--                            </td>--}}
            {{--                            <td>--}}
            {{--                                {{$data->name}}--}}
            {{--                            </td>--}}
            {{--                            <td>--}}
            {{--                                {{$data->email}}--}}

            {{--                            </td>--}}
            {{--                            @if($data->usertype=="0")--}}
            {{--                            <td>--}}
            {{--                                <a--}}
            {{--                                    href="{{url('/deleteusers',$data->id)}}"--}}
            {{--                                ><label class="badge badge-danger">delete</label></a>--}}
            {{--                            </td>--}}
            {{--                            @else--}}
            {{--                            <td>--}}
            {{--                                <label class="badge badge-info">Not Allowed</label>--}}
            {{--                            </td>--}}
            {{--                            @endif--}}
            {{--                            <td>--}}
            {{--                                {{$data->created_at}}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}

            {{--                        </tbody>--}}
            {{--                        @endforeach--}}
            {{--                    </table>--}}

            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            {{--    </div>--}}
            {{--</div>--}}
        </div></div></div>
</div>
</div>
</div>
{{--</div>--}}


@include("admin.adminscript")
<!-- plugins:js -->
<script src="../../admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../admin/assets/vendors/select2/select2.min.js"></script>
<script src="../../admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../admin/assets/js/off-canvas.js"></script>
<script src="../../admin/assets/js/hoverable-collapse.js"></script>
<script src="../../admin/assets/js/misc.js"></script>
<script src="../../admin/assets/js/settings.js"></script>
<script src="../../admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../admin/assets/js/file-upload.js"></script>
<script src="../../admin/assets/js/typeahead.js"></script>
<script src="../../admin/assets/js/select2.js"></script>
<!-- End custom js for this page -->
</body>
</html>
