@extends('guider.layouts.main')
@section('content')


        <div id="main">
          <div id="">
            <div class="row"> 
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="nav_list"> 
                  <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">/</a></li>
                    <li><a href="javascript:void(0)">Orders</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="main_table">
                  <div class="table-responsive table-bordered table-striped">
                    <table class="table display" id="example">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Package Title</th>
                        <th>Country</th>
{{--                        <th>Payment Slip</th>--}}
                        <th>Price</th>
                        <!-- <th >Action</th> -->
                      </tr>
                      @foreach($orders as $key=>$value)
                        <tr>
                        <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{$key+1}}</a> </td>
                            <td class="border-0 font-weight-bold">{{$value->getUser->username}}</td>
                            <td class="border-0 font-weight-bold">{{$value->getUser->email}}</td>
                            <td class="border-0 font-weight-bold">{{ $value->getPackages->title }}</td>
                            <td class="border-0 font-weight-bold">{{ $value->getPackages->getCountry->name }}</td>
{{--                            <td class="border-0 font-weight-bold"><a href="{{ $value->payment_url }}">Payemnt slip</a></td>--}}
                            <td class="border-0 font-weight-bold">${{ $value->getPackages->price }}</td>
                            <!-- <td class="border-0 font-weight-bold">
                                <span class="{{$value->status == 1 ? 'text-success' : 'text-danger'}}">{{$value->status == 1 ? 'Active' : 'Inactive'}}</span>
                            </td>
                            <td class="border-0">
                                <a href="{{route('Guider_job_applied').'/'.$value->id}}" class="text-primary mr-3"></i>Apply</a>
                                <a href="{{route('admin_jobs_edit').'/'.$value->id}}" class="text-secondary mr-3"><i class="fas fa-edit"></i>Edit</a>
                                <span class="text-primary"> |  </span>
                                <a href="{{route('admin_jobs_delete').'/'.$value->id}}" class="text-danger ml-3"><i class="far fa-trash-alt"></i>Delete</a>
                            </td> -->
                        </tr>
                    @endforeach

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection






