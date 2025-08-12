@extends('layouts.main')
@section('content')

    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text text-center lips_div ">
                        <h3><strong> Delete </strong> Account</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- Log In Start -->
    <section class="log_in">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 centerCol">
                    <p style="    padding: 0 0 0 100px;"><strong><i>Please verify your email to delete your account, After deleting account it won't be recover. </i></strong></p>
                </div>
            </div>
            <div class="row">
                <form action="{{route('UI_vacationer_del_account_email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xs-12 col-sm-4 col-md-4 centerCol">
                        <div class="row">
                            <div class="log_input ">
                                <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="del_btn">
                            <button type="submit">Delete Account</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>    <!-- Log In End -->

@endsection
