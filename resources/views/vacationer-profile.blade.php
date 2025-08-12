@extends('layouts.main')
@section('content')

    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3><strong> My</strong> Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- Log In Start -->
    <section class="log_in sec-log">
        <div class="container">
            <div class="row">
                <form action="{{route('UI_vacationer_profile_update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="log_input sec-log">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="User Name*"
                                           value="{{$user->username}}" required>
                                    @error('username')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="full_name" class="form-control" placeholder="Full Name*"
                                           value="{{$user->getUserProfile->full_name}}" required>
                                    @error('full_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group log_input cust">
                                    <select class="sel" name="country_id" required>
                                        <option selected="" hidden="" value="" disabled="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option
                                                value="{{$country->id}}" {{$user->getUserProfile ? $user->getUserProfile->country_id == $country->id ? 'selected' : '' : ''}}>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone No*"
                                           value="{{$user->getUserProfile->phone}}" required>
                                    @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail*"
                                           value="{{$user->email}}" required>
                                    @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address*"
                                           value="{{$user->getuserProfile->address}}" required>
                                    @error('address')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="zip_code" class="form-control" placeholder="Zip Code*"
                                           value="{{$user->getuserProfile->zip_code}}" required>
                                    @error('zip_code')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-md-12">
                                    <div class="first_check image_upload">
                                        <div class="form-group">
                                            <input type="file" name="image"
                                                   class="" {{$user->avatar  ? "" : "required"}}>
                                            @error('image')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="col-md-12 col-md-12">
                              <div class="cent-img">
                                  <img src="{{asset('users/'.$user->avatar)}}">
                              </div>
                            </div>
                            <div class="sign_btn">
                                <button type="submit">Update Profile</button>
                            </div>
                            <div class="del_btn">
                                <a href="{{route('UI_view_delete_account')}}">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>    <!-- Log In End -->

@endsection

