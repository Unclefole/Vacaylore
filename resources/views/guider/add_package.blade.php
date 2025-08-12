@extends('guider.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@section('content')
    <div id="main">
        <div id="main-contents">
            <div id="abouttab" class="tabcontent DBabout">

                <div class="main_form">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="nav_list">
                            <ul>
                                <li><a href="{{ route('Guider_packages') }}">Home</a></li>
                                <li><a href="javascript:void(0)">/</a></li>
                                <li><a href="{{ route('Guider_packages') }}">Package list</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span>Add Package</span>
                    <small></small>
                    <div class="dashboarform mtop60">
                        <div class="info">
                            <h3>Packages Add</h3>
                        </div>
                        <form action="{{ route('Guider_add_edit_package') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Title"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea  class="form-control" id="w3review" name="description" rows="4" cols="50" style="height: 150px;"></textarea>
{{--                                        <input type="text" name="description" class="form-control"--}}
{{--                                               placeholder="Description" required>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image[]" class="form-control" placeholder="Image"
                                               multiple="multiple" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="Price"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control" name="country_id" required>
                                            <!-- <option selected="" hidden="" disabled="">Select Country</option> -->
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                                        <label>Country ID</label>
                                                          <input type="number" name="country_id" class="form-control" placeholder="Country">
                                                        </div> -->
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" min="{{ Carbon\Carbon::now()->addDay()->format('Y-m-d') }}"
                                               value="{{ Carbon\Carbon::now()->addDay()->format('Y-m-d') }}"
                                               name="from_date"
                                               class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" min="{{ Carbon\Carbon::now()->addDay(2)->format('Y-m-d') }}"
                                               value="{{ Carbon\Carbon::now()->addDay(2)->format('Y-m-d') }}"
                                               name="end_date"
                                               class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Meet-Up Point</label>
                                        <input id="searchTextField" class="form-control" type="text" size="50"
                                               name="meet_up_point"  placeholder="Enter a location" autocomplete="on"
                                               runat="server" required/>
                                        <input type="hidden" id="placeId" name="place_id"/>
                                        <input type="hidden" id="cityLat" name="latitude"/>
                                        <input type="hidden" id="cityLng" name="longitude"/>
                                    </div>
                                    @error('meet_up_point')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Favored Scenery</label>
                                        <select class="form-control" name="activity" required>
                                            <option value="" selected hidden>Please Select Favored Scenery</option>
                                            @foreach ($sceneries as $scenery)
                                                <option value="{{$scenery->id}}">{{$scenery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Activities</label>
{{--                                        <select class="form-control js-example-basic-single" multiple="multiple" name="activities[]" required>--}}
{{--                                                @foreach ($activities as $activity)--}}
{{--                                                <option value="{{$activity->id}}">{{$activity->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
                                        <select class="slelct_text form-control" id="choices-multiple-remove-button" placeholder="Select Activities" name="activities[]" multiple readonly >
                                            @foreach ($activities as $activity)
                                                <option value="{{$activity->id}}">{{$activity->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>


                                        <label><input type="radio" name="status" value="0" checked>
                                            Active
                                        </label>
                                        <label><input type="radio" name="status" value="1">
                                            Inactive
                                        </label>
                                    </div>
                                    <button type="submit" class=" sub btn btn_dashed"> Submit</button>


                                </div>

                            </div>
                    </div>
                </div>
            </div>
@endsection
@push('js')
                <script type="text/javascript"
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCu5v9OrHrhf55iPRd8JIgB_QGAlZpmlj0&libraries=places"></script>
                <script>
                    function initialize() {
                        var input = document.getElementById('searchTextField');
                        var autocomplete = new google.maps.places.Autocomplete(input);
                        google.maps.event.addListener(autocomplete, 'place_changed', function () {
                            var place = autocomplete.getPlace();
                            // console.log(place.place_id)
                            document.getElementById('placeId').value = place.place_id;
                            document.getElementById('cityLat').value = place.geometry.location.lat();
                            document.getElementById('cityLng').value = place.geometry.location.lng();
                        });
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('.js-example-basic-single').select2({
                            placeholder: "Please select activites",
                            allowClear: true,
                            tags: true,
                            tokenSeparators: [',', ' ']
                        });
                    });
                </script>
    @endpush