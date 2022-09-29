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
                   <form action="{{route('Guider_add_edit_package').'/'.$package->id}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label>Title</label>
                          <input type="text" name="title" value="{{$package->title}}" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                            <input type="text" name="description" value="{{$package->description}}" class="form-control" placeholder="Description" required>
                        </div>
                        <div class="row col-md-12">
                          @for($a = 0; $a < count($package->getImages); $a++)
                            <img class="inline-block col-md-2" src="{{asset('/packages/'.$package->getImages[$a]->title)}}" alt="img">
                          @endfor
                        </div>
                        <div class="form-group">
                          <label>Image</label>
                            <input type="file" name="image[]" multiple class="form-control" placeholder="Image">
                        </div>
                        <div class="form-group">
                        <label>Price</label>
                          <input type="number" name="price" value="{{$package->price}}" class="form-control" placeholder="Price" required>
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
                        <!-- <div class="form-group">
                        <label>Country ID</label>
                          <input type="number" name="country_id" class="form-control" placeholder="Country">
                        </div> -->
                       <div class="form-group">
                        <label>Start Date</label>
                          <input type="date" name="from_date" min="{{Carbon\Carbon::now()->format('Y-m-d')}}" value="{{$package->from_date}}" class="form-control" placeholder="Email Address" required>
                        </div>
                       <div class="form-group">
                        <label>End Date</label>
                          <input type="date" name="end_date" min="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" value="{{$package->end_date}}" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label>Favored scenery</label>
                            <select class="form-control" name="activity" required>
                                <option selected="" hidden="" disabled="">Select Country</option>
                                @foreach($sceneries as $scenery)
                                    <option {{ $scenery->id == $package->activity ? 'selected' : ''}} value="{{$scenery->id}}">{{$scenery->name}}</option>
                                @endforeach
                            </select>

{{--                                <option {{ 'Ancient Architecture' == $package->activity ? 'selected' : ''}} value="Ancient Architecture">Ancient Architecture</option>--}}
{{--                                <option {{ 'Beaches' == $package->activity ? 'selected' : ''}} value="Beaches">Beaches</option>--}}
{{--                                <option {{ 'Concrete Jungles' == $package->activity ? 'selected' : ''}} value="Concrete Jungles">Concrete Jungles</option>--}}
{{--                                <option {{ 'Deserts' == $package->activity ? 'selected' : ''}} value="Deserts">Deserts</option>--}}
{{--                                <option {{ 'Forests' == $package->activity ? 'selected' : ''}} value="Forests">Forests</option>--}}
{{--                                <option {{ 'Flea Markets' == $package->activity ? 'selected' : ''}} value="Flea Markets">Flea Markets</option>--}}
{{--                                <option {{ 'Safari' == $package->activity ? 'selected' : ''}} value="Safari">Safari</option>--}}
{{--                                <option {{ 'Volcanic Hotspots' == $package->activity ? 'selected' : ''}} value="Volcanic Hotspots">Volcanic Hotspots</option>--}}
{{--                                <option {{ 'Wine Country' == $package->activity ? 'selected' : ''}} value="Wine Country">Wine Country</option>--}}
{{--                                <option {{ 'Mountains' == $package->activity ? 'selected' : ''}} value="Mountains">Mountains</option>--}}
{{--                                <option {{ 'Lake/River fronts' == $package->activity ? 'selected' : ''}} value="Lake/River fronts">Lake/River fronts</option>--}}
{{--                                <option {{ 'Tropical Rain forests' == $package->activity ? 'selected' : ''}} value="Tropical Rain forests">Tropical Rain forests</option>--}}
{{--                            </select>--}}
                        </div>
                          <div class="form-group">
                              <label>Activities</label>
                              <select class="slelct_text form-control" id="choices-multiple-remove-button" placeholder="Select Activities" name="activities[]" multiple readonly >
                                  @foreach ($activities as $key=> $activity)
                                      <option {{ in_array($activity->id, json_decode($package->activity_2)) ? 'selected' : ''}} value="{{$activity->id}}">{{$activity->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                        <div class="form-group">
                         <label>Status</label>


                          <label><input type="radio" name="status" value="0" {{ $package->status === 0 ? 'checked' : ''}}>
                             Active
                          </label>
                          <label><input type="radio" name="status" value="1" {{ $package->status === 1 ? 'checked' : ''}}>
                            Inactive
                          </label>
                        </div>
                        <button type="submit" class=" sub btn btn_dashed" > Submit</button>


                      </div>

                    </div>
                </div>
              </div>
            </div>


@endsection
@push('js')
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