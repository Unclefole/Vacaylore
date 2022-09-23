@extends('layouts.main')
@section('content')

    <!-- banner start -->
        <section class="main_slider">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="banner_text text-center ">
                      <h3>Packages</h3>
                  </div>
              </div>
          </div>
      </div>
      </section>
    <!-- banner end -->
    <!-- product Start -->
    <!-- product End -->
    <section class="product_sec">
      <div class="container">

        <div class="row">
          @foreach($packages as $package)

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <a href="{{route('Vacationer_package_detail', $package->id)}}">
                <div class="pro_main">
                  <div class="pro_img">
                    <?php $images = $package->getImages; ?>
                    <img src="{{asset('packages/'.$images[0]->title)}}" class="img-fluid" alt="">
                  </div>
                  <div class="pro_text">
                    <div class="webster">
                      <h4><i class="fa-solid fa-user"></i>
                        {{$package->getUser->username}}
                      </h4>
                    </div>
                    <div class="draw">
                      <a href="{{route('Vacationer_package_detail', $package->id)}}">{{$package->title}}</a>
                    </div>
                    <div class="borderrr">
                      <div class="row">
                        <!-- <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="star">
                            <a href="javascript:void(0)">
                              <i class="fa-solid fa-star"></i> 4.9 <span>(203)</span>
                            </a>
                          </div>
                        </div> -->
                          <div class="tooll col-sm-12 text-white">
                              <span class="">From : {{$package->from_date}}</span>
                          </div>
                          <div class="tooll col-sm-12 text-white">
                              <span class="">End : {{$package->end_date}}</span>
                          </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="tooll">
                            <div class="tooltip">Country : {{$package->getCountry->name}}
                              <span class="tooltiptext">{{$package->description}}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="tooll">
                            <!-- <h5>$200</h5> -->
                            <h5>Starting At</h5>
                          </div>
                        <!-- <div class="heart">
                            <a href="javascript:void(0)"><i class="fa-solid fa-heart"></i></a>
                          </div> -->
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div class="tooll">
                            <h5>${{$package->price}}</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
          </div>

        @endforeach



          <!-- <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="pro_main">
              <div class="pro_img">
                <img src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/207863668/original/2dd61c9bd5d828616e87d6e75b7eb74d0b7c4a0d.jpg" class="img-fluid" alt="">
              </div>
              <div class="pro_text">
                <div class="webster">
                  <h4><i class="fa-solid fa-user"></i>
                    <img src="https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png" class="img-fluid"  alt="">
                    websutra
                  </h4>
                </div>
                <div class="draw">
                  <a href="javascript:void(0)">I will draw a unique logo for your enterprise</a>
                </div>
                <div class="borderrr">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="star">
                        <a href="javascript:void(0)">
                          <i class="fa-solid fa-star"></i> 4.9 <span>(203)</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <div class="tooltip">Hover over me
                          <span class="tooltiptext">This Gig is offered by unrivaled talent verified by Fiverr for quality and service.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="last">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="tooll">
                        <h5>$200</h5>
                        <h5>Starting At</h5>
                      </div>  
                    <div class="heart">
                        <a href="javascript:void(0)"><i class="fa-solid fa-heart"></i></a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <h5>$200</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          

          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="pro_main">
              <div class="pro_img">
                <img src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/221221391/original/f55973e26f62917868ceea6234e0a0b89a279edc.jpg" class="img-fluid" alt="">
              </div>
              <div class="pro_text">
                <div class="webster">
                  <h4><img src="https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png" class="img-fluid"  alt="">websutra</h4>
                </div>
                <div class="draw">
                  <a href="javascript:void(0)">I will draw a unique logo for your enterprise</a>
                </div>
                <div class="borderrr">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="star">
                        <a href="javascript:void(0)"><i class="fa-solid fa-star"></i> 4.9 <span>(203)</span></a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <div class="tooltip">Hover over me
                          <span class="tooltiptext">This Gig is offered by unrivaled talent verified by Fiverr for quality and service.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="last">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="heart">
                        <a href="javascript:void(0)"><i class="fa-solid fa-heart"></i></a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <h4>Starting At</h4>
                        <h5>$200</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="pro_main">
              <div class="pro_img">
                <img src="https://fiverr-res.cloudinary.com/video/upload/t_gig_cards_web/jedze8ztnvieyeyf7vsy.png" class="img-fluid" alt="">
              </div>
              <div class="pro_text">
                <div class="webster">
                  <h4><img src="https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/6b705596713956936f7dd1c9176d9cee-1533547927922/7ba0d351-04b3-4826-8a55-7779ec09157c.png" class="img-fluid"  alt="">websutra</h4>
                </div>
                <div class="draw">
                  <a href="javascript:void(0)">I will draw a unique logo for your enterprise</a>
                </div>
                <div class="borderrr">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="star">
                        <a href="javascript:void(0)"><i class="fa-solid fa-star"></i> 4.9 <span>(203)</span></a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <div class="tooltip">Hover over me
                          <span class="tooltiptext">This Gig is offered by unrivaled talent verified by Fiverr for quality and service.</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="last">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="heart">
                        <a href="javascript:void(0)"><i class="fa-solid fa-heart"></i></a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <div class="tooll">
                        <h4>Starting At</h4>
                        <h5>$200</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </section>
@endsection
