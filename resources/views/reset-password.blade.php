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
    
    <!-- Reset Password Start -->
    <section class="log_in">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                    <div class="log_input">
                        <form action="{{route('reset_password_data',[$user->id])}}" method="POST">
                            @csrf
        					<div class="form-group">
                                    <input type="password" class="form-control" name="new_password" placeholder="New Password" aria-label="Password">
                                    <span> <a href="javascript:void(0)" type="button" onclick="showPass()"><i class="fa-regular fa-eye"></i></a></span>
                                     @error('new_password')
                                    <p class="text-danger" id="al">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="Password" class="form-control" name="confirm_password" placeholder="Confirm Password" aria-label="Password">
                                    <span> <a href="javascript:void(0)" type="button" onclick="showPass()"><i class="fa-regular fa-eye"></i></a></span>
                                    @error('confirm_password')
                                    <p class="text-danger" id="al">{{$message}}</p>
                                    @enderror
        					    </div>
            					<div class="form-group text-center mar-b-0">
            						<input type="submit" class="btn btn-primary">
            					</div>
        					</div>
        				</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reset Password End -->

@endsection
@push('js')
<script>
    function showPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endpush