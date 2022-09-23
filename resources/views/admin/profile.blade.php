@extends('admin.layouts.main')
@section('content')

            <div class="row mt-5">
                <div class="col-12 col-xl-12">
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                        @if(Session::has('oldpass'))
                            <div class="alert alert-danger mb-4" id="success-alert">
                                <center><span class="text-white">{{Session::get('oldpass')}}</span></center>
                            </div>
                        @endif
                        @if(Session::has('reset'))
                            <div class="alert alert-success mb-4" id="success-alert">
                                <center><span class="text-white">{{Session::get('reset')}}</span></center>
                            </div>
                        @endif
                        @if(Session::has('update'))
                            <div class="alert alert-success mb-4" id="success-alert">
                                <center><span class="text-white">{{Session::get('update')}}</span></center>
                            </div>
                        @endif
                        <!--<h2 class="h5 mb-4">General information</h2>-->
                        <!--<form action="{{route('admin_profile_update').'/'.Auth()->user()->id}}" method="POST">@csrf-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-6 mb-3">-->
                        <!--            <div>-->
                        <!--                <label for="first_name">UserName</label>-->
                        <!--                <input class="form-control" value="{{$profile->username}}" id="first_name" type="text" placeholder="Enter your username" required name="username">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6 mb-3">-->
                        <!--            <div class="form-group">-->
                        <!--                <label for="email">Email</label>-->
                        <!--                <input class="form-control" value="{{$profile->email}}" id="email" type="email" placeholder="name@company.com" required name="email">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="mt-3">-->
                        <!--        <button type="submit" class="btn btn-primary text-center">Save General Information</button>-->
                        <!--    </div>-->
                        <!--</form>-->
                        <form action="{{route('admin_password_update').'/'.Auth()->user()->id}}" method="POST">@csrf
                            <h2 class="h5 my-4">Password Reset</h2>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="address">Old Password</label>
                                        <input class="form-control" id="password" type="password" name="old_password" placeholder="Old Password" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="number">New Password</label>
                                        <input class="form-control" id="password" type="password" name="new_password" placeholder="New Password" autocomplete="off" >
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Save Password</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!--<div class="col-12 col-xl-4">-->
                <!--    <div class="row">-->
                <!--        <div class="col-12 mb-4">-->
                <!--            <div class="card border-light text-center p-0">-->
                <!--                <div class="profile-cover rounded-top" data-background="{{asset('admin/assets/img/profile-cover.jpg')}}"></div>-->
                <!--                <div class="card-body pb-5">-->
                <!--                    <img src="{{asset('admin/assets/img/team/profile-picture-1.jpg')}}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">-->
                <!--                    <h4 class="h3">Neil Sims</h4>-->
                <!--                    <h5 class="font-weight-normal">Senior Software Engineer</h5>-->
                <!--                    <p class="text-gray mb-4">New York, USA</p>-->
                <!--                    <a class="btn btn-sm btn-primary mr-2" href="#"><span class="fas fa-user-plus mr-1"></span> Connect</a>-->
                <!--                    <a class="btn btn-sm btn-secondary" href="#">Send Message</a>-->
                <!--                </div>-->
                <!--             </div>-->
                <!--        </div>-->
                <!--        <div class="col-12">-->
                <!--            <div class="card card-body bg-white border-light shadow-sm mb-4">-->
                <!--                <h2 class="h5 mb-4">Select profile photo</h2>-->
                <!--                <div class="d-xl-flex align-items-center">-->
                <!--                    <div>-->
                                        <!-- Avatar -->
                <!--                        <div class="user-avatar xl-avatar mb-3">-->
                <!--                            <img class="rounded" src="{{asset('admin/assets/img/team/profile-picture-3.jpg')}}" alt="change avatar">-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="file-field">-->
                <!--                        <div class="d-flex justify-content-xl-center ml-xl-3">-->
                <!--                           <div class="d-flex">-->
                <!--                              <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span> <input type="file">-->
                <!--                              <div class="d-md-block text-left">-->
                <!--                                 <div class="font-weight-normal text-dark mb-1">Choose Image</div>-->
                <!--                                 <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>-->
                <!--                              </div>-->
                <!--                           </div>-->
                <!--                        </div>-->
                <!--                     </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>



@endsection
