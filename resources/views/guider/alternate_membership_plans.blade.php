@extends('guider.layouts.main')
@section('content')


<div class="price_main">
            <div class="container">
              <div class="row">
                @foreach($plans as $plan)
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp {{ $plan->id == $current_plan ? 'my_color' : ''}}" style="{{ $plan->id == $current_plan ? 'background: #101954; color: #fff;' : ''}}" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>{{$plan->title}}</small>                            
                      <!-- <h5><del>$500.00</del> 60% off !</h5> -->
                      <span>${{$plan->price}}</span>
                    <div class="scrollbar" id="style-3">
                    <ul class="my_colr">
                      <li>Duration {{$plan->duration}} days</li>
                      <li>Packages limit {{$plan->no_of_packages < 10 ? $plan->no_of_packages : 'infinity'}}</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> Contact/Query Form</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>              
                    </ul>
                    </div>
                    <a href="{{route('Guider_stripe_form', $plan->id)}}" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div>
                @endforeach
                <!-- <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Alternative</small>                            
                      <h5><del>$19.99 - $199</del> 60% off !</h5>
                      <span>$19.99-$199</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 5 Page Website</li>
                      <li> 5 Stock Photos</li>
                      <li> 3 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                      <li> CMS will be Additional $250*</li>
                    </ul>
                    </div>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Corporate</small>                            
                      <h5><del>$1750.00</del> 60% off !</h5>
                      <span>$699.00</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 10 Unique Pages Website</li>
                      <li> CMS Integration</li>
                      <li> Custom WordPress Backend</li>
                      <li> 8 Stock images</li>
                      <li> 5 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                    </ul>
                    </div>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div> 
                <div class="col-sm-3 col-md-3">
                  <div class="packagesbox wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s"> 
                    <small>Corporate</small>                            
                      <h5><del>$1750.00</del> 60% off !</h5>
                      <span>$699.00</span>
                    <div class="scrollbar" id="style-3">
                    <ul>
                      <li> 10 Unique Pages Website</li>
                      <li> CMS Integration</li>
                      <li> Custom WordPress Backend</li>
                      <li> 8 Stock images</li>
                      <li> 5 Banner Design</li>
                      <li> 1 jQuery Slider Banner</li>
                      <li> FREE Google Friendly Sitemap</li>
                      <li> 48 to 72 hours TAT</li>
                      <li> Complete Deployment</li>
                      <li> 100% Satisfaction Guarantee</li>
                      <li> 100% Unique Design Guarantee</li>
                      <li> 100% Money Back Guarantee *</li>
                    </ul>
                    </div>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">GET STARTED</a>
                  </div>
                </div>                      -->
              </div>
            </div>  
          </div>
        </div>

 
@endsection