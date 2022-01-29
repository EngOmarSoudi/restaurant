<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--

    TemplateMo 558 Klassy Cafe

    https://templatemo.com/tm-558-klassy-cafe

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a  href="{{url('/')}}" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
{{--                        <li class="scroll-to-section"><a href="#about">About</a></li>--}}

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->

{{--                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>--}}
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="{{url('/redi')}}">Features Page 4</a></li>
                            </ul>
                        </li>
{{--                        <li class="submenu">--}}
{{--                            <a href="javascript:;">menu</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#menu">specail duches</a></li>--}}
{{--                                <li><a href="#offers">main menu</a></li>--}}

{{--                            </ul>--}}
{{--                        </li>--}}

                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
{{--                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>--}}
                        <li class="scroll-to-section">
                            @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}"> cart[{{$count}}]</a>
                            @endauth
                            @guest
                                <a href="#">cart[0]</a>
                            @endguest
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li>

                                    <x-app-layout>
                                    </x-app-layout>

                                </li>
                            @else
                                <li class="submenu">
                                    <a href="javascript:;">account</a>
                                    <ul>
                                        <li><a href="{{ route('login') }}">Log in</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                        @endauth
                                        @endif
                                    </ul>
                                </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<form action="{{url('ordreconfirm')}}" method="post">
<div style="padding-top: 100px;padding-left: 100px" class="container-fluid page-body-wrapper">
<div class="content-wrapper">
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description"> Add class <code>.table-striped</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> food name </th>
                            <th> price </th>
                            <th> quantity </th>
                            <th> action </th>
                            <th> Deadline </th>
                        </tr>
                        </thead>

                            @csrf


                        <tbody>
                        @foreach($data as $data)
{{--                            @for($k=0;$k>=100;$k++)--}}
                            <tr>

{{--                                <td>--}}
{{--                                    <input type="text"name="foodname[]" value="{{$data->title}}" hidden>--}}


{{--                                    {{$k}}--}}
{{--                                </td>--}}
                                <td>
                                    <input type="text" name="foodname[]" value="{{$data->title}}" hidden>


                                    {{$data->title}}
                                </td>
                                <td>
                                    <input type="text" name="price[]" value=" {{$data->price}}" hidden>
                                    {{$data->price}}

                                </td>
                                <td>
                                    <input type="text" name="quantity[]" value="{{$data->quantity_id}}" hidden>
                                    {{$data->quantity_id}}

                                </td>
                            </tr>
{{--                            @endfor--}}
                        @endforeach
                            <tr>


                                    @foreach($data2 as $data2)
                                        {{--                            <tr >--}}

                                        <td>
                                            <a href="{{url('/deletecart',$data2->id)}}"><label class="badge badge-danger"> delete</label></a>
                                        </td>
                                        {{--                            </tr>--}}

                                    @endforeach
{{--                                @if($data->usertype=="0")--}}

{{--                                @else--}}
{{--                                    <td>--}}
{{--                                        <label class="badge badge-info">Not Allowed</label>--}}
{{--                                    </td>--}}
{{--                                @endif--}}
{{--                                <td>--}}
{{--                                    {{$data->created_at}}--}}
{{--                                </td>--}}
                            </tr>



                        </tbody>


                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12" align="center" style="padding-bottom: 30px;padding-top: 30px">
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
        <button id="order" class="btn btn-primary">order now</button>
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div id="appear"   class="col-12 grid-margin stretch-card" style="display:none;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputMobile" placeholder="phone" required>
                    </div>



                    <div class="form-group">
                        <label for="exampleInputEmail3">address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputEmail3" placeholder="address" required>
                    </div>

                    <button type="submit" value="order confirm" class="btn btn-primary mr-2">order confirm </button>
                    <button id="close" type="button" class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</form>
<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $("#order").click(
        function ()
        {
            $("#appear").show();
        }
    );
    $("#close").click(
        function ()
        {
            $("#appear").hide();
        }
    );
</script>
<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
</body>
</html>
