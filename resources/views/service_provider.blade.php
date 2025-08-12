@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong> Service Provider</strong> Packages </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    

    <section class="service_provider">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
                    <div class="service text-center" style="padding-top: 0% !important;">
{{--                        <h3>Where are you going</h3>--}}
                        <p>Browse through our package selections by simply clicking anywhere on the map or using the search bar to pick the country of your choice and see what's available.
                        </p>
                        <!-- -------------------------------------------------------------------------- -->
                        <!-- <form method="POST" action=""> -->
                            <!-- @csrf -->
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
                        <!-- -------------------------------------------------------------------------- -->
                        <div class="form-group">
                            <input type="text" aria-describedby="emailHelp" id="search" name="country" placeholder="Search Country" autocomplete="off">
                            <!-- <input type="search" class="searchable" placeholder="Search by Part#" id="search" name="part" required> -->
                            <button type="button" class="btn btn-primary"><i
                                    class="fas fa-magnifying-glass"></i></button>
                                    <p>Search for countries list or click a map location* and find your next private guide!</p>
                        </div>
                        <!-- -------------------------------------------------------------------------- -->
                    <!-- </form> -->
                    <div id="test"></div>
                    @push('js')
                        <script>        
                        $(document).ready(function(){
                        $('#search').on('keyup', function(){
                                let x = $(this).val();
                                let data = {'search': x};
                                let url = 'country-search';
                                
                                $.ajax({
                                    url: url,
                                    data: data,
                                    type: 'GET',
                                
                                    success: function(data) {
                                        res = data;
                                        $('#test').html(data);
                        
                                    },
                                    error: function() {
                                        console.log('error');
                                    }
                        
                                });
                            });
                        });
                        
                        </script>
                        @endpush
                    <!-- -------------------------------------------------------------------------- -->
                    </div>
                    <div class="service_map">
                        <!--<img src="images/service_map.png" class="img-fluid" alt="">-->
                        <div id="chartdiv"></div>
                    </div>
                    <!--haris -->
                 <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="service_content about_con">
                         <h2>Our Services</h2>
                             <p>Here at iVacay, we offer an array of services to ensure that your vacation is thoroughly planned.
    We strongly believe that there’s no such thing as a bad vacation, there’s only a badly planned
    vacation and those are no fun. So we bring you the best of the best when it comes to planning
    your <span>travels</span> . Planning with iVacay is smooth sailing, even when you’re not on our local cruise
    tour. What exactly do we offer, you ask? Anything you need. Just tell us who you are and we’ll
    match you with the perfect service to fulfill your unique needs.</p>
                    <h2>iVacay for Businesses Small and Big</h2>
                    <p>iVacay is a unique platform, not only do we serve clients who are looking to travel; but we also
help businesses network with said clients to secure strong and long-lasting relationships.
Regardless of the size of your company, if you’re looking to network, iVacay can help. After you
get in touch with us to tell us a bit about your services, we’ll draft up a nice offer for you</p>
                     <p>Here are some of the iVacay services we currently provide business owners with:</p>
                     <h2>Networking For Entertainment Services</h2>
                     <p>If you or your company are in the <span>entertainment</span> business, then this offer is for you! Are you
located at a spot where tourists can enjoy the travel destination? Do you promise a fun time for
your customers? If you answered yes, then you’re ready to team up with iVacay! We’re always
looking for fun and high-spirited partners to help us with our customers’ entertainment. Simply
contact us to explain why you’re a good fit and we’ll go from there.</p>
                     <h2>Networking Lodging Services</h2>
                     <p>Maybe you own a five-star hilltop hotel or run a quaint little bungalow by the beach. The scale
doesn’t matter, but your services do. If you have great testimonials backing your
accommodation services up, then we want to work with you! iVacay is constantly on the hunt for
good <span>lodging</span> and trustworthy business partners, so if you think you’ve got what it takes to join
the iVacay family, go ahead and give us a call.</p>
                     <h2>iVacay For Adventurous Travelers</h2>
                     <p>You, as the customer, are at the heart of iVacay. All our efforts serve to give you a memorable
<span>booking</span> experience and that’s what we aim to guarantee with our services. So what exactly can
we provide you with? Let’s have a look:</p>
                        <h2>Matching You With A Local Tour Guide</h2>
                        <p>We can match you with local professionals in your area of choice. In doing so, you’ll get to visit
all the spots that traditional tours don’t take you to. Sounds like a great deal right? Just you wait,
there’s more. These <span>local tour guides</span> are there to take you to the best spots that fit your
preferences, for example, if you’re a sports fan, you could end up having dinner at a famous
sportsperson’s favorite restaurant.</p>
                    <h2>Hassle-Free Planning</h2>
                    <p>Want to plan your vacation without having a chaotic moment? We can help. Click here to plan
your vacation with iVacay!</p>
                     </div>
                 </div>
                 </div>
                    <!--haris -->
                </div>
                <div class="register">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="resgis_text">
                                <h3>Register as a <span>Guide !</span></h3>
                                <a href="{{route('UI_sign_up')}}">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@push('js')
    <script>
                               // Create map instance
        var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = am4core.color("#7f7f7f");

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#7e70a8");

// Add hit events
polygonSeries.mapPolygons.template.events.on("hit", function(ev) {
    
         let country_name = ev.target.dataItem.dataContext.name;
//   alert("Clicked on " + country_name);
         
           let data = {'country_name': country_name};
           var url = "{{route('UI_country_specific_packages_map')}}"+ "/" + country_name;
        //    let url = 'country-specific-packages';
           let response = AjaxRequest_get(url, data);
           window.location = response.route;
           console.log(response.route);
   
});
    </script>
@endpush
