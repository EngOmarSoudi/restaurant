{{--<section class="section" id="offers">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 offset-lg-4 text-center">--}}
{{--                <div class="section-heading">--}}
{{--                    <h6>Klassy Week</h6>--}}
{{--                    <h2>This Week’s Special Meal Offers</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="row" id="tabs">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="heading-tabs">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 offset-lg-3">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>--}}
{{--                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></li>--}}
{{--                                        <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12">  @foreach($data as $data)--}}
{{--                            <form action="{{url('/addcart',$data->id)}}" method="post">--}}
{{--                                @csrf--}}
{{--                        <section class='tabs-content'>--}}
{{--                            <article id='tabs-1'>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}



{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="/foodimage/{{$data->image}}" alt="">--}}
{{--                                                        <h4>{{$data->title}}</h4>--}}
{{--                                                        <p>{{$data->description}}</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>${{$data->price}}</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                            </article>--}}
{{--                            <input type="number" name="quantity" min="1" value="1" style="width: 80px" >--}}
{{--                            <input type="submit" value="add cart">--}}

{{--                        </section>--}}
{{--                            </form>--}}
{{--                            @endforeach--}}
{{--                            <article id='tabs-2'>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-04.png" alt="">--}}
{{--                                                        <h4>Eggs Omelette</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$14</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-05.png" alt="">--}}
{{--                                                        <h4>Dollma Pire</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$18</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-06.png" alt="">--}}
{{--                                                        <h4>Omelette & Cheese</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$22</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="right-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-01.png" alt="">--}}
{{--                                                        <h4>Fresh Chicken Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$10</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-02.png" alt="">--}}
{{--                                                        <h4>Orange Juice</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$20</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-03.png" alt="">--}}
{{--                                                        <h4>Fruit Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$30</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                            <article id='tabs-3'>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-05.png" alt="">--}}
{{--                                                        <h4>Eggs Omelette</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$14</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-03.png" alt="">--}}
{{--                                                        <h4>Orange Juice</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$18</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-02.png" alt="">--}}
{{--                                                        <h4>Fruit Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$10</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="right-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-06.png" alt="">--}}
{{--                                                        <h4>Fresh Chicken Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$8.50</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-01.png" alt="">--}}
{{--                                                        <h4>Dollma Pire</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$9</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-04.png" alt="">--}}
{{--                                                        <h4>Omelette & Cheese</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$11</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<section class="section" id="offers">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 offset-lg-4 text-center">--}}
{{--                <div class="section-heading">--}}
{{--                    <h6>Klassy Week</h6>--}}
{{--                    <h2>This Week’s Special Meal Offers</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="row" id="tabs">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="heading-tabs">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 offset-lg-3">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>--}}
{{--                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></li>--}}
{{--                                        <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <section class='tabs-content'>--}}
{{--                            <article id='tabs-1'>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-01.png" alt="">--}}
{{--                                                        <h4>Fresh Chicken Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$10.50</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-02.png" alt="">--}}
{{--                                                        <h4>Orange Juice</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$8.50</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-03.png" alt="">--}}
{{--                                                        <h4>Fruit Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$9.90</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="right-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-04.png" alt="">--}}
{{--                                                        <h4>Eggs Omelette</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$6.50</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-05.png" alt="">--}}
{{--                                                        <h4>Dollma Pire</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$5.00</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-06.png" alt="">--}}
{{--                                                        <h4>Omelette & Cheese</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$4.10</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                            <article id='tabs-2'>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-04.png" alt="">--}}
{{--                                                        <h4>Eggs Omelette</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$14</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-05.png" alt="">--}}
{{--                                                        <h4>Dollma Pire</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$18</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-06.png" alt="">--}}
{{--                                                        <h4>Omelette & Cheese</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$22</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="right-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-01.png" alt="">--}}
{{--                                                        <h4>Fresh Chicken Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$10</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-02.png" alt="">--}}
{{--                                                        <h4>Orange Juice</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$20</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-03.png" alt="">--}}
{{--                                                        <h4>Fruit Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$30</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                            <article id='tabs-3'>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="left-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-05.png" alt="">--}}
{{--                                                        <h4>Eggs Omelette</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$14</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-03.png" alt="">--}}
{{--                                                        <h4>Orange Juice</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$18</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-02.png" alt="">--}}
{{--                                                        <h4>Fruit Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$10</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="right-list">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-06.png" alt="">--}}
{{--                                                        <h4>Fresh Chicken Salad</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$8.50</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-01.png" alt="">--}}
{{--                                                        <h4>Dollma Pire</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$9</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <div class="tab-item">--}}
{{--                                                        <img src="assets/images/tab-item-04.png" alt="">--}}
{{--                                                        <h4>Omelette & Cheese</h4>--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>--}}
{{--                                                        <div class="price">--}}
{{--                                                            <h6>$11</h6>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
