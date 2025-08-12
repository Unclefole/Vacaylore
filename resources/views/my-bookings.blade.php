@extends('layouts.main')
@section('content')
    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> My Bookings</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main_page">
        <div class="container">
            <div class="row">
            @foreach($orders as $order)
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        <div class="pro_main">
                            <div class="pro_img">
                                <img src="{{asset('packages/'.$order->getJourneyPackage->getImage[0]->title)}}" class="img-fluid" alt="">
                            </div>
                            <div class="pro_text">
                                <div class="webster">
                                    <h4><i class="fa-solid fa-user"></i>
                                        {{$order->getJourneyGuider->username}}
                                    </h4>
                                </div>
                                <div class="draw">
                                    <a href="{{route('Vacationer_package_detail', $order->getJourneyPackage->id)}}">{{$order->getJourneyPackage->title}}</a>
                                </div>
                                <div class="borderrr">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tooll">
                                                <div class="tooltip">
                                                   <p>Country : {{$order->getJourneyPackage->getCountry->name}}</p>
                                                   <p>Invoice : {{$order->invoice_number}}</p>
                                                   <p>Date : {{$order->created_at}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="last">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                                            <div class="tooll text-left" >
                                                <h5 style="text-align: left !important;">Paid</h5>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="tooll">
                                                <h5>${{$order->getJourneyPackage->price}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- banner end -->


@endsection
