 <!-- footer strat  -->
 <div class="footerSec second_foter">
    <div class="container">
      @if(Request::segment(1) !== 'thank-you')
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
          <div class="square_img">
            <img src="{{asset('images/square.png')}}" class="img-fluid" alt="">
            <h3><strong>Book</strong> With <strong>Credit Card <br>or Debit Card</strong></h3>
          </div>
        </div>
      </div>
      @endif
      <!--<div class="row">-->
      <!--  <div class="col-xs-12 col-sm-12 col-md-12">-->
      <!--    <div class="footer_logo text-center">-->
      <!--      <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">-->
      <!--      <p>Lorem ipsum dolor sit amet consetuer adipiscing elit, sed diam nonummy.</p>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <div class="foot_list text-center">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul>
              <li><a href="{{route('UI_index')}}">Home</a></li>
              <li><a href="{{route('UI_about_us')}}">About Us</a></li>
              <li><a href="{{route('UI_for_guide')}}">Ultimate Ivacay Deals</a></li>
              <!-- <li><a href="{{route('UI_articles')}}">Articles</a></li> -->
              <li><a href="{{route('UI_share_experience')}}">Share your ultimate experiences</a></li>
              <li><a href="{{route('UI_service_provider')}}">Service Provider</a></li>
              <li><a href="{{route('UI_vacationer')}}">Plan your Vacation</a></li>
              <li><a href="{{route('UI_faq')}}">FAQ</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="logo_slide">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="blogslid">
              <div>
                <div><img src="{{asset('images/log_1.png')}}" class="img-fluid" alt=""></div>
              </div>
              <div>
                <div><img src="{{asset('images/log_2.png')}}" class="img-fluid" alt=""></div>
              </div>
              <div>
                <div><img src="{{asset('images/log_3.png')}}" class="img-fluid" alt=""></div>
              </div>
              <div>
                <div><img src="{{asset('images/log_1.png')}}" class="img-fluid" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="copy_right">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="">
              <p><a href="javascript:void(0)">© Ivacay - 2022.</a> The trademarks, logos, and the content appearing herein, is exclusively owned by Ivacay, and/or its licensors, and are protected. Any unauthorized use or sale or reproduction or distribution, shall attract suitable action under applicable law.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
 -->
  <!-- Modal -->
  <div class="main_modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="small_form">
            <form action="">
              <input type="text" placeholder="Enter Your Email">
              <button type="button"> Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer strat  -->