@extends('guider.layouts.main')
@section('content')

    <!--<style>-->
    <!--.editbtn button {-->
    <!--    font-size: 14px;-->
    <!--    line-height: 20px;-->
    <!--    font-weight: 500;-->
    <!--    color: #fff;-->
    <!--    margin: 0;-->
    <!--    border-radius: 50px;-->
    <!--    -webkit-border-radius: 50px;-->
    <!--    -moz-border-radius: 50px;-->
    <!--    text-transform: capitalize;-->
    <!--    border: 2px dashed #f8c22c;-->
    <!--    padding: 0;-->
    <!--    height: 47px;-->
    <!--    width: 212px;-->
    <!--    display: flex;-->
    <!--    align-items: center;-->
    <!--    justify-content: center;-->
    <!--    background-color: #333333;-->
    <!--    margin: 30px 0 0;-->
    <!--}-->

    <!--.editbtn button:hover {-->
    <!--    background-color: #f8c22c;-->
    <!--    color: #333333;-->
    <!--    border: 2px dashed #333333;-->
    <!--}-->

    <!--.profile_imag img {-->
    <!--    margin: 0 auto;-->
    <!--    display: flex;-->
    <!--    align-items: center;-->
    <!--    justify-content: center;-->
    <!--    height: 100%;-->

    <!--}-->
    <!--</style>-->
    <div id="main">
        <div id="main-contents">
            <div id="abouttab" class="tabcontent DBabout">

                <div class="profile_imag">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <span>Profile Settings</span>
                            <small>The information below is private and confidential</small>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            @if($profile)
                                <img class="img-list" src="{{asset('users/'.$profile->getProfileUser->avatar)}}"
                                     alt="{{$profile->getProfileUser->avatar}}">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="dashboarform mtop60">
                    <div class="info">
                        <h3>Your Information</h3>
                    </div>
                    <form action="{{route('Guider_update_profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Full Name</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="full_name" value="{{$profile ? $profile->full_name : ''}}"
                                           class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Phone Number</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="number" name="phone" value="{{$profile ? $profile->phone : ''}}"
                                           class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Address</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="address" value="{{$profile ? $profile->address : ''}}"
                                           class="form-control" placeholder="Address">
                                </div>
                                @error('address')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Zip Code</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="zip_code" value="{{$profile ? $profile->zip_code : ''}}"
                                           class="form-control" placeholder="Zip Code">
                                </div>
                                @error('zip_code')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Paypal Account Email</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="paypal_account_email"
                                           value="{{$profile ? $profile->paypal_email : ''}}" class="form-control"
                                           placeholder="Paypal Account Email">
                                </div>
                                @error('paypal_account_email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label> Account Number </label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="account_number"
                                           value="{{$profile ? $profile->account_number : ''}}" class="form-control"
                                           placeholder="Account Number">
                                </div>
                                @error('account_number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                        <!-- <div class="col-md-2 col-sm-2 col-xs-12">
                    <label>Country</label>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="country" value="{{$profile ? $profile->country : ''}}" class="form-control" placeholder="Country">
                    </div>                      
                  </div> -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label>Country</label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <select class="form-control" name="country_id">
                                        <option selected="" hidden="" disabled="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" {{$profile ? $profile->country_id == $country->id ? 'selected' : '' : ''}}>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('country_id')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!-- <div class="form-group">
                                  <input type="text" name="country_id" class="form-control" placeholder="Country ID">
                                </div>                       -->
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label> Image </label>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" placeholder="Image">
                                </div>
                                <div class="form-group">
                                    <label> {{$profile ? $profile->getProfileUser->avatar : ''}} </label>
                                </div>
                                @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="editbtn">
                            <button type="submit sign_btn btn btn_dashed">Update</button>
                            <!-- <a href="#">Save</a> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection