@extends('layouts.main')
@section('content')

    <style>
        .eight iframe {
            display: inline-block;
            vertical-align: baseline;
            object-fit: cover;
            border-radius: 40px;
            opacity: 0.9;
            background: #000000;
            height: 345px;
        }
    </style>
<!-- banner start -->
<section class="main_slider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="banner_text text-center">
            <h1>Ultimate <span>ivacay</span> Deals </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner end -->


  <section class="about_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="about_text wow fadeInLeft" data-wow-duration="2s">
                <h4>We help tourists and guides find each other</h4>
                <p>Most people are hesitant when it comes to going on vacation due to budget concerns. This is because travel is often seen as an expensive thing that only the rich can afford.
                Although the general stigma that surrounds vacationing has made it out to be something of a luxury, we have made it our job to bring travel and affordability together.</p>
                <p>With the help of our ultimate vacation deals, you will have the opportunity of seeing new and unique places without breaking the bank. So how do these ultimate iVacay deals work? Let’s give them a look! </p>
              <!--   <a href="javascript:void(0)" class="btn btn_dashed"> Read More</a>-->
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="eight" id="myAudio">
{{--                    <video width="100%" preload="auto" loop="loop"  id="videoBanner playauto" class="videoBanner"  autoplay="true">--}}
{{--                        <source src="images/ivacay_ultimate.mp4" type="video/mp4">--}}
{{--                        <source src="images/ivacay_ultimate.mp4" type="video/ogg">--}}
{{--                    </video>--}}
                    <iframe width="100%"  src="https://www.youtube.com/embed/XhIE3eYEzxo" title="ULTIMATE IVACAY DEALS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
      </div>


              <div class="row" id="about-Go-Straight">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="about-Go-Straight-sec-1">
                <h2>Go Straight to the Source of Travel with iVacay</h2>
                <p>iVacay is a gathering point for tourist guides, big companies, small business owners, and travel nomads from all over the globe.
                Our mission is to create a safe and strong community for people who are looking to unite under the roof of affordable travel. </p>

                <p>We match tourists with their ideal local guides, accommodation sources, entertainment options, and food places.
                Our directory of businesses includes a list of trustworthy clients who have proved themselves in their respective industries on all aspects including hygiene, quality standards, and respectability.</p>

                <p>Here at iVacay, we aim to eliminate the intermediary agents and take you straight to the source of travel.
                In doing so, we are able to cut back on the profit costs that are charged by these intermediary sources and provide you with a much affordable price for your vacation</p>
            </div>
            </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h2>Benefits of Eliminating Intermediary Agents with iVacay </h2>
                <p>While cutting back on travel costs is a pretty handy benefit of eliminating intermediary agents,
                it isn’t the only thing that makes or breaks a deal. Using our services to eliminate intermediary agents also allows you to do the following: </p>

               <ul>
                   <li>Getting a personal feel of the travel scene.</li>
                   <li>Networking with people all over the globe as you travel.</li>
                   <li>Individualizing your travel experience by making changes in your vacation directly through the service provider.</li>
                   <li>Traveling freely without sticking to predestined locations.</li>
                   <li>Spontaneously changing your schedule.</li>
                   <li>Not having to stick to the norms of outsourced services./li>
               </ul>

                <p>All these opportunities will be a great starting point for you to take your vacation to the next level. Once you book with iVacay,
                you will have access to the contact information of your guide and the details of your accommodation. You could then use these pieces of information to individualize your experience in whatever way you see fit.</p>
            </div>
        </div>
    </div>
  </section>





  <section class="service_sec">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 centerCol">
          <div class="ser_head text-center">
            <h2>How<span>  Can You Benefit From The Ultimate iVacay Deals?</span></h2>
            <p>What makes affordable vacations possible is the deals you get from your travel website of choice. Here’s how you can benefit from iVacay’s selection of ultimate deals!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 ">
          <div class="ser_list">
            <ul>
              <li><b>Book in Advance.</b>  <br> If you start looking into prices earlier, you can get an even more affordable quote for your destination through our advance booking options.</li>
              <li><b>Subscribe to Our Mailing List.</b>  <br>The ultimate iVacay deals scale even further during certain time periods. Subscribe to our mailing list in order to be notified as soon as we have a sale on the website.
              </li>


            </ul>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 ">
          <div class="ser_list">
            <ul>
              <li><b>Consider Booking Our Travel Packages.</b>  <br> Want to go one step further with affordable traveling? When you're booking with us, make sure to get a travel package. That way, you can get more and pay less.</li>
              <li><b>Try to Stay Away From Peak Seasons.</b>  <br> Travel prices fluctuate depending on the amount of demand from travelers.
              These demands go up in peak seasons when a lot of people are looking to book travel. If you need to stick to a budget, try avoiding these periods.
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
@push('js')
{{--    Play Auto Start--}}
    <script>
        var plugin_url = "https://plugins.svn.wordpress.org/play-pause-button-for-video/trunk";
        jQuery(document).ready(function () {
            if (jQuery("video").length > 0) {
                jQuery("video").wrap("<div class='video-parent-class'></div>");
                /*Add image just before to vedio  */
                jQuery("<img class='pause-play-img' src='" + plugin_url + "/img/img01.png' >").insertBefore("video");
                jQuery("video").each(function (index) {
                    /*vedio parent div height width code*/
                    var vedio_width = jQuery(this).width();
                    var vedio_height = jQuery(this).height();
                    jQuery(".video-parent-class").css({
                        "width": vedio_width + "px",
                        "height": vedio_height + "px"
                    });

                    /*Pause Play image, middle width in vedio code*/
                    var half_width_vedio = vedio_width / 2;
                    var middle_object_width = half_width_vedio - 32;
                    jQuery(".pause-play-img").css({
                        "left": middle_object_width + "px"
                    });

                    /*Pause Play image middle height in vedio code*/
                    var half_height_vedio = vedio_height / 2;
                    var middle_object_heigh = half_height_vedio - 32;
                    jQuery(".pause-play-img").css({
                        "top": middle_object_heigh + "px"
                    });

                    /*Pause play and image src change code*/
                    jQuery(this).on("click", function () {
                        if (this.paused) {
                            this.play();
                            jQuery(this).prev().attr("src", plugin_url + "/img/img02.png");
                        } else {
                            this.pause();
                            jQuery(this).prev().attr("src", plugin_url + "/img/img01.png");
                        }


                    });


                    /*pause play image click vedio on off functionlity code*/
                    jQuery(this).prev().on("click", function () {
                        var myVideo = jQuery(this).next()[0];
                        if (myVideo.paused) {

                            myVideo.play();
                            jQuery(this).attr("src", plugin_url + "/img/img02.png");
                        } else {

                            myVideo.pause();
                            jQuery(this).attr("src", plugin_url + "/img/img01.png");
                        }

                    });
                    /*Floating js for HTML Video Start*/
                    var windows = jQuery(window);
                    var videoWrap = jQuery(this).parent();
                    var video = jQuery(this);
                    var videoHeight = video.outerHeight();
                    var videoElement = video.get(0);
                    windows.on('scroll', function () {
                        var windowScrollTop = windows.scrollTop();
                        var videoBottom = videoHeight + videoWrap.offset().top;
                        //alert(videoBottom);

                        if ((windowScrollTop > videoBottom)) {
                            if (!videoElement.paused) {
                                videoWrap.height(videoHeight);
                                video.addClass('stuck');
                                if (video.hasClass('stuck')) {
                                    video.attr("controls", "1");
                                }
                                video.prev().attr("src", plugin_url + "/img/img02.png");
                                jQuery(".scrolldown").css({"display": "none"});
                            } else {
                                videoWrap.height('auto');
                                video.removeClass('stuck');
                                video.removeAttr('controls');
                                if (videoElement.paused) {
                                    video.prev().attr("src", plugin_url + "/img/img01.png");
                                }
                            }

                        } else {
                            videoWrap.height('auto');
                            video.removeClass('stuck');
                            video.removeAttr('controls');
                        }

                    });
                    /*Floating js for HTML Video End*/
                });
            }
        });
        function playautoFunction() {
            var x = document.getElementById("playauto").autoplay;
        }
    </script>
{{--    Play Auto end--}}
@endpush
