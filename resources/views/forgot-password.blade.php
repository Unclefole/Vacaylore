@extends('layouts.main')
@section('content')

<!-- banner start -->
<section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3> <strong> Forgot</strong> Password</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    
    <!-- Forgot Password Start -->
    <section class="log_in">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                    <div class="log_input">
                        <form action="{{route('forgot_password_email')}}" method="POST">
                            @csrf
        					<div class="form-group">
        						<input type="email" name="email" placeholder="Enter Your Email Address" required>
        					</div>
        					<div class="form-group text-center mar-b-0">
        						<input type="submit" class="btn btn-primary">
        					</div>
        				</form>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Forgot Password End -->

@endsection

