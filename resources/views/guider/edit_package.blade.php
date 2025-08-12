@extends('guider.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

@section('content')

    <div id="main">
        <div id="main-contents">
            <div id="abouttab" class="tabcontent DBabout">

                <div class="main_form">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="nav_list">
                            <ul>
                                <li><a href="{{route('Guider_packages')}}">Home /</a></li>
                                <li><a href="{{route('Guider_packages')}}">Package list /</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span>Edit Package</span>
                    <small></small>
                    <div class="dashboarform mtop60">
                        <div class="info">
                            <h3>Packages Edit</h3>
                        </div>
                        <form action="{{route('Guider_add_edit_package').'/'.$package->id}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{$package->title}}" class="form-control"
                                               placeholder="Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$package->description}}"
                                               class="form-control" placeholder="Description" required>
                                    </div>
                                    <div class="row col-md-12">
                                        @for($a = 0; $a < count($package->getImages); $a++)
                                            <img class="inline-block col-md-2"
                                                 src="{{asset('/packages/'.$package->getImages[$a]->title)}}" alt="img">
                                        @endfor
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image[]" multiple class="form-control"
                                               placeholder="Image">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{$package->price}}"
                                               class="form-control" placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control" name="country_id">
                                            <option selected="" hidden="" disabled="">Select Country</option>
                                            @foreach($countries as $country)
                                                <option {{ $country->id == $package->country_id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" name="from_date"
                                               min="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                                               value="{{$package->from_date}}" class="form-control"
                                               placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="end_date"
                                               min="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}"
                                               value="{{$package->end_date}}" class="form-control"
                                               placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Meet-Up Point</label>
                                        <input id="searchTextField" class="form-control" type="text" size="50"
                                               name="meet_up_point"  value="{{$package->meet_up_point}}" placeholder="Enter a location" autocomplete="on"
                                               runat="server" required/>
\                                        <input type="hidden" id="placeId" name="place_id" value="{{$package->place_id}}"/>
                                        <input type="hidden" id="cityLat" name="latitude" value="{{$package->latitude}}"/>
                                        <input type="hidden" id="cityLng" name="longitude" value="{{$package->longitude}}"/>
                                    </div>
                                    @error('meet_up_point')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Favored scenery</label>
                                        <select class="form-control" name="activity" required>
                                            <option selected="" hidden="" disabled="">Select Country</option>
                                            @foreach($sceneries as $scenery)
                                                <option {{ $scenery->id == $package->activity ? 'selected' : ''}} value="{{$scenery->id}}">{{$scenery->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Activities</label>
                                        <select class="slelct_text form-control" id="choices-multiple-remove-button"
                                                placeholder="Select Activities" name="activities[]" multiple readonly>
                                            @foreach ($activities as $key=> $activity)
                                                @if(!empty($package->activity_2))
                                                    <option {{ in_array($activity->id, json_decode($package->activity_2)) ? 'selected' : ''}} value="{{$activity->id}}">{{$activity->name}}</option>
                                                @else
                                                    <option value="{{$activity->id}}">{{$activity->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>


                                        <label><input type="radio" name="status"
                                                      value="0" {{ $package->status === 0 ? 'checked' : ''}}>
                                            Active
                                        </label>
                                        <label><input type="radio" name="status"
                                                      value="1" {{ $package->status === 1 ? 'checked' : ''}}>
                                            Inactive
                                        </label>
                                    </div>
                                    <button type="submit" class=" sub btn btn_dashed"> Submit</button>


                                </div>

                            </div>
                        </form>
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
                    $(document).ready(function () {
                        $('.js-example-basic-single').select2({
                            placeholder: "Please select activites",
                            allowClear: true,
                            tags: true,
                            tokenSeparators: [',', ' ']
                        });
                    });
                </script>
    @endpush