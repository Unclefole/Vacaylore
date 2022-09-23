{{--@extends('layouts.main')--}}
{{--@section('content')--}}

{{--    <!--@push('css')-->--}}
{{--    <!--    <style>-->--}}
{{--    <!--        .rate {-->--}}
{{--    <!--            float: left;-->--}}
{{--    <!--            height: 46px;-->--}}
{{--    <!--            padding: 0 10px;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate:not(:checked) > input {-->--}}
{{--    <!--            position: absolute;-->--}}
{{--    <!--            display: none;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate:not(:checked) > label {-->--}}
{{--    <!--            float: right;-->--}}
{{--    <!--            width: 1em;-->--}}
{{--    <!--            overflow: hidden;-->--}}
{{--    <!--            white-space: nowrap;-->--}}
{{--    <!--            cursor: pointer;-->--}}
{{--    <!--            font-size: 30px;-->--}}
{{--    <!--            color: #ccc;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate:not(:checked) > label:before {-->--}}
{{--    <!--            content: '★ ';-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate > input:checked ~ label {-->--}}
{{--    <!--            color: #ffc700;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate:not(:checked) > label:hover,-->--}}
{{--    <!--        .rate:not(:checked) > label:hover ~ label {-->--}}
{{--    <!--            color: #deb217;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rate > input:checked + label:hover,-->--}}
{{--    <!--        .rate > input:checked + label:hover ~ label,-->--}}
{{--    <!--        .rate > input:checked ~ label:hover,-->--}}
{{--    <!--        .rate > input:checked ~ label:hover ~ label,-->--}}
{{--    <!--        .rate > label:hover ~ input:checked ~ label {-->--}}
{{--    <!--            color: #c59b08;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rating-container .form-control:hover, .rating-container .form-control:focus {-->--}}
{{--    <!--            background: #fff;-->--}}
{{--    <!--            border: 1px solid #ced4da;-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rating-container textarea:focus, .rating-container input:focus {-->--}}
{{--    <!--            color: #000;-->--}}
{{--    <!--        }-->--}}

{{--            <!--Css Start For Reviews-->--}}


{{--    <!--        a {-->--}}
{{--    <!--            text-decoration: none !important;-->--}}
{{--    <!--            color: inherit-->--}}
{{--    <!--        }-->--}}

{{--    <!--        a:hover {-->--}}
{{--    <!--            color: #455A64-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .card {-->--}}
{{--    <!--            border-radius: 5px;-->--}}
{{--    <!--            background-color: #fff;-->--}}
{{--    <!--            padding-left: 60px;-->--}}
{{--    <!--            padding-right: 60px;-->--}}
{{--    <!--            margin-top: 30px;-->--}}
{{--    <!--            padding-top: 30px;-->--}}
{{--    <!--            padding-bottom: 30px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rating-box {-->--}}
{{--    <!--            width: 130px;-->--}}
{{--    <!--            height: 130px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            color: #fff-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rating-label {-->--}}
{{--    <!--            font-weight: bold-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .rating-bar {-->--}}
{{--    <!--            width: 300px;-->--}}
{{--    <!--            padding: 8px;-->--}}
{{--    <!--            border-radius: 5px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-container {-->--}}
{{--    <!--            width: 100%;-->--}}
{{--    <!--            background-color: #f1f1f1;-->--}}
{{--    <!--            text-align: center;-->--}}
{{--    <!--            color: white;-->--}}
{{--    <!--            border-radius: 20px;-->--}}
{{--    <!--            cursor: pointer;-->--}}
{{--    <!--            margin-bottom: 5px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-6 {-->--}}
{{--    <!--            width: 100%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}
{{--    <!--        .bar-5 {-->--}}
{{--    <!--            width: 85%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-4 {-->--}}
{{--    <!--            width: 60%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-3 {-->--}}
{{--    <!--            width: 30%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-2 {-->--}}
{{--    <!--            width: 10%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .bar-1 {-->--}}
{{--    <!--            width: 0%;-->--}}
{{--    <!--            height: 13px;-->--}}
{{--    <!--            background-color: #FBC02D;-->--}}
{{--    <!--            border-radius: 20px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        td {-->--}}
{{--    <!--            padding-bottom: 10px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .star-active {-->--}}
{{--    <!--            color: #FBC02D;-->--}}
{{--    <!--            margin-top: 10px;-->--}}
{{--    <!--            margin-bottom: 10px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .star-active:hover {-->--}}
{{--    <!--            color: #F9A825;-->--}}
{{--    <!--            cursor: pointer-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .star-inactive {-->--}}
{{--    <!--            color: #CFD8DC;-->--}}
{{--    <!--            margin-top: 10px;-->--}}
{{--    <!--            margin-bottom: 10px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .blue-text {-->--}}
{{--    <!--            color: #0091EA-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .content {-->--}}
{{--    <!--            font-size: 18px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .profile-pic {-->--}}
{{--    <!--            width: 90px;-->--}}
{{--    <!--            height: 90px;-->--}}
{{--    <!--            border-radius: 100%;-->--}}
{{--    <!--            margin-right: 30px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .pic {-->--}}
{{--    <!--            width: 80px;-->--}}
{{--    <!--            height: 80px;-->--}}
{{--    <!--            margin-right: 10px-->--}}
{{--    <!--        }-->--}}

{{--    <!--        .vote {-->--}}
{{--    <!--            cursor: pointer-->--}}
{{--    <!--        }-->--}}
{{--    <!--.about_con p {-->--}}
{{--    <!--    font-weight: 500;-->--}}
{{--    <!--    color: #000000;-->--}}
{{--    <!--    font-size: 14px;-->--}}
{{--    <!--    line-height: 27px;-->--}}
{{--    <!--}h3 {-->--}}
{{--    <!--    font-family: "Poppins", Sans-Serif;-->--}}
{{--    <!--    font-size: 33px;-->--}}
{{--    <!--    line-height: 34px;-->--}}
{{--    <!--    color: #000;-->--}}
{{--    <!--    font-weight: 500;-->--}}
{{--    <!--    margin: 0 0 30px;-->--}}
{{--    <!--}-->--}}
{{--    <!--.pt-4 {-->--}}
{{--    <!--    padding-top: 1.5rem !important;-->--}}
{{--    <!--}-->--}}
{{--    <!--h1 {-->--}}
{{--    <!--    font-family: "Poppins", Sans-Serif;-->--}}
{{--    <!--    font-size: 55px;-->--}}
{{--    <!--    line-height: 60px;-->--}}
{{--    <!--    color: #fff;-->--}}
{{--    <!--    font-weight: 500;-->--}}
{{--    <!--    margin: 0 0 17px;-->--}}
{{--    <!--    text-align: center;-->--}}
{{--    <!--}-->--}}
{{--    <!--p.total {-->--}}
{{--    <!--    color: #ffff;-->--}}
{{--    <!--    text-align: center;-->--}}
{{--    <!--    font-size: 16px;-->--}}
{{--    <!--}-->--}}
{{--    <!--.about_con p {-->--}}
{{--    <!--    font-weight: 500;-->--}}
{{--    <!--    color: #fff;-->--}}
{{--    <!--    font-size: 14px;-->--}}
{{--    <!--    line-height: 27px;-->--}}

{{--    <!--}-->--}}
{{--            <!--Css End For Reviews-->--}}
{{--    <!--    </style>-->--}}
{{--    <!--@endpush-->--}}

{{--    <!-- banner start -->--}}
{{--    <section class="main_slider">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                    <div class="banner_text text-center lips_div ">--}}
{{--                        <h3><strong>Review</strong>s</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- banner end -->--}}
{{--    <!-- Reviews Start -->--}}
{{--    <section class="main_about">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-10 centerCol">--}}
{{--                    <div class="about_con">--}}
{{--                        <h3 style="color: white">Hello @if(Auth()->check()){{Auth()->user()->username}} @endif, Please--}}
{{--                            write a review</h3>--}}
{{--                        <div class="log_input">--}}
{{--                            <form action="{{route('submit_review')}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input type="text" name="message" class="form-control" aria-describedby="reviewHelp"--}}
{{--                                       placeholder="Write a message">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="rate">--}}
{{--                                        <input type="radio" id="star5"--}}
{{--                                               class="rate" name="rating"--}}
{{--                                               value="5"/>--}}
{{--                                        <label for="star5" title="text">5 stars</label>--}}
{{--                                        <input type="radio" id="star4"--}}
{{--                                               class="rate"--}}
{{--                                               name="rating"--}}
{{--                                               value="4"/>--}}
{{--                                        <label for="star4" title="text">4 stars</label>--}}
{{--                                        <input type="radio" id="star3"--}}
{{--                                               class="rate" name="rating"--}}
{{--                                               value="3"/>--}}
{{--                                        <label for="star3" title="text">3 stars</label>--}}
{{--                                        <input type="radio" id="star2"--}}
{{--                                               class="rate" name="rating"--}}
{{--                                               value="2">--}}
{{--                                        <label for="star2" title="text">2 stars</label>--}}
{{--                                        <input type="radio" id="star1"--}}
{{--                                               class="rate" name="rating"--}}
{{--                                               value="1"/>--}}
{{--                                        <label for="star1" title="text">1 star</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <button type="submit">Submit Review</button>--}}

{{--                            </form>--}}

{{--                            <div class="card">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <h1 class="pt-4">{{$review_avg}}</h1>--}}
{{--                                            <p class="total ">out of 5</p>--}}
{{--                                        </div>--}}
{{--                                        <div><span class="fa fa-star star-active mx-1"></span> <span--}}
{{--                                                class="fa fa-star star-active mx-1"></span> <span--}}
{{--                                                class="fa fa-star star-active mx-1"></span> <span--}}
{{--                                                class="fa fa-star star-active mx-1"></span> <span--}}
{{--                                                class="fa fa-star star-inactive mx-1"></span></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <div class="rating-bar0">--}}

{{--                                            <div class="table-responsive text-nowrap">--}}
{{--                                                <table class="table">--}}
{{--                                                <tr>--}}
{{--                                                    <td class="rating-label">Excellent</td>--}}
{{--                                                    <td class="rating-bar">--}}
{{--                                                        <div class="bar-container">--}}
{{--                                                            <div class="{{$excellent_bar}}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="text-right">{{$excellent}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="rating-label">Good</td>--}}
{{--                                                    <td class="rating-bar">--}}
{{--                                                        <div class="bar-container">--}}
{{--                                                            <div class="{{$good_bar}}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="text-right">{{$good}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="rating-label">Average</td>--}}
{{--                                                    <td class="rating-bar">--}}
{{--                                                        <div class="bar-container">--}}
{{--                                                            <div class="{{$average_bar}}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="text-right">{{$average}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="rating-label">Poor</td>--}}
{{--                                                    <td class="rating-bar">--}}
{{--                                                        <div class="bar-container">--}}
{{--                                                            <div class="{{$poor_bar}}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="text-right">{{$poor}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="rating-label">Terrible</td>--}}
{{--                                                    <td class="rating-bar">--}}
{{--                                                        <div class="bar-container">--}}
{{--                                                            <div class="{{$terrible_bar}}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="text-right">{{$terrible}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @if($reviews)--}}
{{--                                @foreach($reviews as $key => $value )--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="row d-flex">--}}
{{--                                            <div class="">--}}
{{--                                                <img class="profile-pic"--}}
{{--                                                     src="{{asset('users/'.$value->getReviewUser->avatar)}}">--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex flex-column">--}}
{{--                                                <h3 class="mt-2 mb-0">{{$value->getReviewUser->username}}</h3>--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-left"><span--}}
{{--                                                            class="text-muted">{{number_format((float)$value->star, 1, '.', '')}}</span>--}}
{{--                                                        @for($i=1; $i<=$value->star; $i++)--}}
{{--                                                            <span><i class="fa fa-star text-warning"></i></span>--}}
{{--                                                        @endfor--}}
{{--                                                    </p>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="ml-auto justify-content-end">--}}
{{--                                            <p class="text-muted pt-5 pt-sm-3">{{$value->created_at->todatestring()}}</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="row text-left">--}}
{{--                                            <p class="content">{{$value->message}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Reviews End -->--}}
{{--@endsection--}}
