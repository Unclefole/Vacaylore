@extends('layouts.main')
@section('content')

    <!-- banner start -->
    <section class="main_slider pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3>{{$package_detail->title}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="main_page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12  col-xs-12">
                            <!-- <div class="pro_service">
                                <h6>You’re viewing a verified Pro service</h6>
                                <p>Pro services are offered by professionals we vetted for quality and service.</p>
                                <a href="javascript:void">Learn more</a>
                            </div> -->

{{--                            <div class="fiverr_pro">--}}
{{--                                <!-- <ul>--}}
{{--                                    <li><a href="javascript:void(0)">Fiverr Pro</a><i class="fas fa-chevron-right"></i>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="javascript:void(0)">Graphics & Desig</a><i--}}
{{--                                            class="fas fa-chevron-right"></i></li>--}}
{{--                                    <li><a href="javascript:void(0)">Logo Design</a>--}}
{{--                                    </li>--}}
{{--                                </ul> -->--}}
{{--                                <h3>{{$package_detail->title}}</h3>--}}
{{--                            </div>--}}

                            <!-- <div class="evelinaro">
                                <ul>
                                    <li><img src="{{asset('images/new_awatar.jpg')}}" class="img_fluid" alt=""></li>
                                    <li><a href="javascript:void(0)">evelinaro</a></li>
                                    <li>Level 2 Seller</li>
                                    <li>
                                        <ul>
                                            <li><a href="javascript:void(0)"> <i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-star"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="slider_products">
                                <div class=" slider-for1">
                                @foreach($package_detail->getImages as $img)
                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('packages/'.$img->title)}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('packages/'.$img->title)}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_2.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_2.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_3.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_3.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_4.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_4.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_5.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_5.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_6.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_6.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_7.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_7.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_8.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_8.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="productMainDetail">
                                            <a href="{{asset('images/slick_9.jpg')}}" tabindex="0" data-fancybox="gallery">
                                                <img src="{{asset('images/slick_9.jpg')}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div> -->

                                </div>
                                <div class=" slider-nav1">
                                @foreach($package_detail->getImages as $img)
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"> <img src="{{asset('packages/'.$img->title)}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    @endforeach
                                <!--<div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('images/slick_2.jpg')}}" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_3.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_4.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_5.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_6.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_7.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_8.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="productlistBox">
                                            <a href="javascript:void(0)"><img src="{{asset('images/slick_9.jpg')}}"
                                                    class="img-responsive" alt=""></a>
                                        </div>
                                    </div> -->

                                </div>


                            </div>

                            <!-- <div class="this_seller">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class="seller_head">
                                            <h5>What people loved about this seller</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                        <div class="revi">
                                            <a href="javascript:voif(0)">See all reviews</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="second_slider">
                                            <div>
                                                <div class="first_order">
                                                    <div class="row">
                                                        <div class="col-md-1 col-sm-1 col-xs-12"> <span>a</span></div>
                                                        <div class="col-md-11 col-sm-11 col-xs-12">
                                                            <h6>alexandermsllc</h6>
                                                            <img src="{{asset('images/us_flag.png')}}" class="img-fluid" alt="">
                                                            <h5>United States</h5>

                                                            <ul>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li>5</li>
                                                            </ul>
                                                            <p>This was my first order from Fiverr and my first time
                                                                working
                                                                with Evelina. I could not recommend her enough! She was
                                                                incredibly knowledgeable and kind through out the
                                                                process,
                                                                provided extra support and advised the how and why of
                                                                her
                                                                decisions while allowing me choices. She also delivered
                                                                8 days
                                                                early!</p>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div>
                                                <div class="first_order">
                                                    <div class="row">
                                                        <div class="col-md-1 col-sm-1 col-xs-12"> <span>a</span></div>
                                                        <div class="col-md-11 col-sm-11 col-xs-12">
                                                            <h6>alexandermsllc</h6>
                                                            <img src="{{asset('images/us_flag.png')}}" class="img-fluid" alt="">
                                                            <h5>United States</h5>

                                                            <ul>
                                                                <li><i class="fa-solid fa-star"></i></li>
                                                                <li>5</li>
                                                            </ul>
                                                            <p>This was my first order from Fiverr and my first time
                                                                working
                                                                with Evelina. I could not recommend her enough! She was
                                                                incredibly knowledgeable and kind through out the
                                                                process,
                                                                provided extra support and advised the how and why of
                                                                her
                                                                decisions while allowing me choices. She also delivered
                                                                8 days
                                                                early!</p>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="this_gig">
                                <h6>About This Package</h6>
                                <p>Title:   {{$package_detail->title}}</p>
                                <p>Price:   ${{$package_detail->price}}</p>
                                <p>Guider:  {{$package_detail->getUser->username}}</p>
                                <p>Activities:
                                @if($activity !== null)
                                    @foreach($activity as $value)  {{$value->name}}, @endforeach
                                @else
                                    -
                                @endif
                                </p>
                                <p>Description:     {{$package_detail->description}}</p>
                                <hr>
                                <h5>Style</h5>
                                <strong>Minimalist</strong>
                                <a href="{{route('Vacationer_stripe_form', $package_detail->id)}}">Book Now With
                                    Debit/Credit card</a>
                                <a href="{{route('UI_pay_with_meta', $package_detail->id)}}">Book Now With Crypto</a>
                            </div>

                            <!-- <div class="your_options">
                                <h3>How it works</h3>
                                <p>Here are the steps to complete your <span>Basic package</span> project: <i
                                        class="fa-solid fa-circle-info"></i></p>

                                <div class="logo_stylesheet">
                                    <small>01</small>
                                    <h4>1. Choose your options</h4>
                                    <p>Message me "Logo Guide" or go to bit.ly/bsp_guide to see all the
                                        logo/color/brand
                                        icon options you can choose from. </p>
                                </div>
                                <div class="logo_stylesheet">
                                    <small>02</small>
                                    <h4>1. Choose your options</h4>
                                    <p>Message me "Logo Guide" or go to bit.ly/bsp_guide to see all the
                                        logo/color/brand
                                        icon options you can choose from. </p>
                                    <a href="javascript:void">See More</a>
                                </div>




                            </div>

                            <div class="cus_eight1">
                                <h2>Exceptional service, vetted by our team</h2>
                                <p>We verify each of our Pro sellers to make sure they put all their talent, expertise,
                                    and passion into your project, and that you get what you expected and beyond.</p>
                                <p>As a Pro customer, you get 24/7 VIP support and 1h response time for any query for
                                    100% satisfaction.</p>
                                <a href="javascriptvoid:(0)">Learn more</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="cus_eight2">
                                        <h3>About The Seller</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cus_eight3">
                                        <img src="{{asset('images/women_1.jpg')}}" class="img-fluid">
                                        <a href="javascriptvoid:(0)"></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <div class="cus_eight3">
                                        <a href="javascriptvoid:(0)">evelinaro</a>
                                        <h6>Modern and Elevated Design for Premium Lifestyle Brands</h6>
                                        <ul>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                                            <li><a href="">5</a></li>
                                            <li>(68)</li>

                                        </ul>
                                        <button>Contact Me</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12"></div>
                            </div>
                            <div class="cus_eight6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Logo Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Book Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Presentation Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Flyer Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Business Cards & Stationery</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Social Media Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_eight4">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>Website Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cus_eight7">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="cus_eight5">
                                            <h6>From</h6>
                                            <h5>United Kingdom</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="cus_eight5">
                                            <h6>Member since</h6>
                                            <h5>Jun 2017</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cus_eight8">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="cus_eight5">
                                                <h6>Avg. response time</h6>
                                                <h5>4 hours</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="cus_eight5">
                                                <h6> Last delivery</h6>
                                                <h5>about 23 hours</h5>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="cus_eight9">
                                                <p>Hi, I am Evelina, • I work with passionate entrepreneurs who strive
                                                    to build meaningful businesses and provide exceptional, premium
                                                    experiences for their customers. I help them to create a brand image
                                                    that evokes trust and truly reflects the high value of what they do.
                                                    •• My design style tends to be clean and minimalistic yet elevated
                                                    by intentionally crafted detail. ••• Originally from Poland, my
                                                    design sense and branding knowledge were shaped in London where I
                                                    first worked full time with boutique branding agencies and
                                                    contracted as an independent designer for established global brands.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cus_nine1">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="cus_nine2">
                                            <h4>My Portfolio <span>NEW</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="cus_nine2">
                                            <a href="javascriptvoid:(0)">View My Portfolio</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine3">
                                            <img src="{{asset('images/HOVER_1.png')}}" class="img-fluid" class="image">
                                            <div class="overlay">
                                                <div class="text">View My Portfolio</div>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main_table">
                                <h2>Compare Packages</h2>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Package</th>
                                            <th>
                                                <h5>PKR 104,669</h5>
                                                <h6>Basic</h6>
                                                <h4>BRAND IDENTITY</h4>
                                                <p> Logo Brand Icon Color Palette Fonts Selection Brand Guidelines
                                                    Social Media Logo</p>
                                            </th>
                                            <th>
                                                <h5>PKR 133,215</h5>
                                                <h6>Standard</h6>
                                                <h4>BRAND IDENTITY + 5 OPTIONS</h4>
                                                <p> Brand Identity+Start with preview of 5 logo options and choose one
                                                    to receive final files</p>
                                            </th>
                                            <th>
                                                <h5>PKR 169,374</h5>
                                                <h6>Premium</h6>
                                                <h4>BRAND IDENTITY PRO</h4>
                                                <p> Brand Identity Standard + Editable Brand Guidelines</p>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Logo transparency</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Vector file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Printable file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3D mockup</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Source file</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Social media kit</th>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                            <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No. of concepts included</th>
                                            <td class="text-center">1</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Revisions</th>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Delivery Time</th>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="last_table">
                                                    <label class="tabel_text">7 days
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="last_table">
                                                    <label class="tabel_text">3 days<br>
                                                        (+PKR 47,577)
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row">Total</th>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 104,669</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 133,215</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="me_total">
                                                    <h5>PKR 169,374</h5>
                                                    <a href="javascript:void(0)">Select</a>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="cus_nine4">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine5">
                                            <h3>Why work with a Pro? Watch Now</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="cus_nine6">
                                            <div class="video-wrapper"><video controls="" autoplay="" loading="lazy">
                                                    <source
                                                        src="https://fiverr-res.cloudinary.com/video/upload/t_direct_hd/v1566729480/static_videos/Fiverr_PRO_2019_promo.mp4.mov"
                                                        type="video/mp4">
                                                </video></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                            <!-- Reviews -->
                            <!-- <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="cusone_1">
                                        <ul>
                                            <li><span>8 Reviews</span></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li>5</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="cusone_2">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By most recent
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Most recent</a></li>

                                                <li><a class="dropdown-item" href="#">Most relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="custen_1">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="breakdown-wrapper grid-12">
                                            <table class="stars-counters">
                                                <tbody>
                                                    <tr class="">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p P+CfLmI L9EM07f co-pro-700 stars-filter"
                                                                    data-impression-collected="true">5
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num"><a href="javascript:void(0)">(8)</a> </td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">4
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">3
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">2
                                                                    Stars</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                    <tr class="no-rating">
                                                        <td><span class="stars-filter-wrapper"><button
                                                                    class="ORLWF8p _5K4hKRK L9EM07f co-grey-500 stars-filter JiQ7F53"
                                                                    disabled="" data-impression-collected="true">1
                                                                    Star</button></span></td>
                                                        <td class="progress-bar-container">
                                                            <div class="T2t2hZx star-progress-bar">
                                                                <div class="+8ZeAtI"><span
                                                                        class="EwNCrd9 star-progress-shape"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="star-num">(0)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="ranking">
                                            <h6 class="text-display-7">Rating Breakdown</h6>
                                            <ul>
                                                <li>Seller communication level<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                                <li>Recommend to a friend<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                                <li>Service as described<span>5<span
                                                            class="review-star rate-10 show-one"></span></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Reviews -->
                        </div>

                    </div>


                    <!-- <div class="filter">
                        <h1>Filters</h1>
                        <form action="/action_page.php">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Show only reviews with delivery images (5)</label>
                        </form>
                    </div>
                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>alexandermsllc</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/us_flag.png')}}" class="img-fluid">United States
                                        </li>
                                    </ul>
                                    <p>This was my first order from Fiverr and my first time working with
                                        Evelina. I could not recommend her enough! She was incredibly
                                        knowledgeable and kind through out the process, provided extra support
                                        and advised the how and why of her decisions while allowing me choices.
                                        She also delivered 8 days early! I am very happy and proud to use the
                                        logo/branding she designed. I can not wait to get started. I would very
                                        much recommend working with Evelina.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/04_Alxander1.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>adrapergs</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/canada.png')}}" class="img-fluid">Canada
                                        </li>
                                    </ul>
                                    <p>Evelina was awesome to work with. She was able to complete the project
                                        prior to the delivery date and was willing to make changes at no
                                        additional cost. The quality of the work is excellent and definitely
                                        exceeded my expectations.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/thumbnil.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>gabrielasiran</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/romania.png')}}" class="img-fluid">Romania
                                        </li>
                                    </ul>
                                    <p>Stellar communication, proactive engagement, Evelina came up with great
                                        suggestions and ideas, very prompt, professional. Delivered exactly what
                                        I was looking for, highly recommend.</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="cus_nine11">
                                    <img src="{{asset('images/thumbnil1.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>pandora2210</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/australia.png')}}" class="img-fluid">Australia
                                        </li>
                                    </ul>
                                    <p>Supper experience withEvelina! I look forward to working with her i the
                                        future!</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cus_nine9">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="cus_nine8">
                                    <span>A</span>
                                </div>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <div class="cus_nine10">
                                    <ul>
                                        <li>
                                            townsquareprop</li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span>5</span></li>
                                    </ul>
                                    <ul class="nine_1">
                                        <li><img src="{{asset('images/us_flag.png')}}" class="img-fluid">United States
                                        </li>
                                    </ul>
                                    <p>Evelina is an absolute GEM. Always helpful and always thorough. You could
                                        not ask for me. Thank you so much!</p>
                                    <span>Published 1 month ago</span>
                                    <div class="helpful">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i>
                                                    Helpful</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-thumbs-down"></i> Not
                                                    Helpful</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="see_more">
                                <a href="javascript:void(0)"><i class="fa-solid fa-plus"></i> see more</a>
                            </div>
                            <div class="related_tags">
                                <h3>Related Tags</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"> elegant logo </a></li>
                                    <li><a href="javascript:void(0)"> fashion</a></li>
                                    <li><a href="javascript:void(0)"> minimalist logo </a></li>
                                    <li><a href="javascript:void(0)"> beauty </a></li>
                                    <li><a href="javascript:void(0)"> logo maker</a></li>


                                </ul>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb-10">
                    <div class="main_scroll">
                        @foreach($guider_packages as $guider_package)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 m-20">
                            <div class="my_revie">
                                <div class="pro_main">
                                    @foreach($guider_package->getImages as $key => $img)
                                        @if($key == 0)
                                    <div class="pro_img">
                                                <img src="{{asset('packages/'.$img->title)}}"
                                                    class="img-fluid" alt="">
                                                </div>
                                                @endif
                                            @endforeach

                                    <div class="pro_text">
                                        <div class="webster">
                                            <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                    class="img-fluid" alt="">{{$guider_package->getUser->username}}</h4>
                                        </div>
                                        <div class="draw">
                                            <a href="{{route('Vacationer_package_detail', $guider_package->id)}}">{{$guider_package->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        <!-- <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="my_revie">
                                    <div class="pro_main">
                                        <div class="pro_img">
                                            <img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/122531603/original/9fae4dd5ff1d22b7247a70538ea51e33458b0dc1.jpg"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="pro_text">
                                            <div class="webster">
                                                <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                        class="img-fluid" alt="">websutra</h4>
                                            </div>
                                            <div class="draw">
                                                <a href="javascript:void(0)">I will draw a unique logo for your
                                                    enterprise</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="my_revie">
                                    <div class="pro_main">
                                        <div class="pro_img">
                                            <img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/122531603/original/9fae4dd5ff1d22b7247a70538ea51e33458b0dc1.jpg"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="pro_text">
                                            <div class="webster">
                                                <h4><img src="{{asset('https://fiverr')}}-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png"
                                                        class="img-fluid" alt="">websutra</h4>
                                            </div>
                                            <div class="draw">
                                                <a href="javascript:void(0)">I will draw a unique logo for your
                                                    enterprise</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>



                </div>
            </div>



    </section>


@endsection
@push('js')
<script>
    // product slider
$(".slider-for1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: ".slider-nav1",
  });
  $(".slider-nav1").slick({
    autoplay: true,
    autoplaySpeed: 20000,
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: ".slider-for1",
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          vertical: false,
        },
      },
    ],
  });
</script>
@endpush
