<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($data2 as $data)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img style="width: 300px;height: 280px" src="chefimage/{{$data->image}}" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>{{$data->name}}r</h4>
                        <span>{{$data->speciality}}</span>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-lg-4">--}}
{{--                <div class="chef-item">--}}
{{--                    <div class="thumb">--}}
{{--                        <div class="overlay"></div>--}}
{{--                        <ul class="social-icons">--}}
{{--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-behance"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <img src="assets/images/chefs-02.jpg" alt="Chef #2">--}}
{{--                    </div>--}}
{{--                    <div class="down-content">--}}
{{--                        <h4>David Martin</h4>--}}
{{--                        <span>Cookie Chef</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="chef-item">--}}
{{--                    <div class="thumb">--}}
{{--                        <div class="overlay"></div>--}}
{{--                        <ul class="social-icons">--}}
{{--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-google"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <img src="assets/images/chefs-03.jpg" alt="Chef #3">--}}
{{--                    </div>--}}
{{--                    <div class="down-content">--}}
{{--                        <h4>Peter Perkson</h4>--}}
{{--                        <span>Pancake Chef</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
