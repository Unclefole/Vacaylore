@extends('admin.layouts.main')
@section('content')
{{--    loader start    --}}
<style>
    #test {
        width: 100%;
        height: 100vh;
        background: rgb(255 255 255 / 69%);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
    }
    #test img {
        position: fixed;
        left: 0;
        right: 0;
        top: 45%;
        margin: 0px auto;
    }
</style>


<div class="preloader d-none" id="test" >
    <img src="{{asset('images/loader.gif')}}" alt="" class="img-fluid">
</div>
{{--    loader ends     --}}

    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item active" aria-current="page">Guider Payments</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Guider Payments-List</h1>
            </div>
        </div>
    </div>


    <div class="card border-light shadow-sm mb-4">
        <div class="card-body">
            @if(Session::has('message'))
                <div class="alert alert-success mb-4" id="success-alert">
                    <center><span class="text-white">{{Session::get('message')}}</span></center>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded" id="table_id">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0">#</th>
                        <th class="border-0">Date</th>
                        <th class="border-0">Invoice</th>
                        <th class="border-0">Payment Method</th>
                        <th class="border-0">Commission</th>
                        <th class="border-0">Guider-Email</th>
                        <th class="border-0">Guiders-Cut</th>
                        <th class="border-0">Status</th>
                        <th class="border-0 text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    <!-- Start of Item -->
                    @foreach($guider_payment as $key=>$value)
                        <tr>
                            <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{$key+1}}</a> </td>
                            <td class="border-0 font-weight-bold">{{$value->getJournies->created_at}}</td>
                            <td class="border-0 font-weight-bold">{{$value->getJournies->invoice_number}}</td>
                            <td class="border-0 font-weight-bold">{{$value->getJournies->payment_type}}</td>
                            <td class="border-0 font-weight-bold">{{$value->getJournies->commission}}%</td>
                            <td class="border-0">{{$value->getUser->email}}</td>
                            <td class="border-0"><strong>$</strong> {{$value->getJournies->guiders_cut}}</td>
                            <td class="border-0">
                                @if($value->transfer_status === 1)
                                    <p class="text-success">Paid</p>
                                @elseif($value->transfer_status === 2)
                                    <p class="text-danger">Declined</p>
                                @else
                                    <p class="text-warning">Pending</p>
                                @endif
                            </td>
                            <td class="border-0">
                                @if($value->transfer_status === 1)
                                    <p class="text-success">Paid</p>
                                @elseif($value->transfer_status === 2)
                                    <p class="text-danger">Declined</p>
                                @else
                                    <a href="#" id="pay" data-id="{{$value->id}}"  class="text-success mr-3"><i class="fas fa-credit-card"></i> Pay</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <!-- End of Item -->
                    <!-- Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .text-left {
            float: left !important;
        }
        .modal-footer {
            display: inline-block !important;
            flex-wrap: wrap;
            flex-shrink: 0;
            align-items: center;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 0.0625rem solid #eaedf2;
            border-bottom-right-radius: 0.2375rem;
            border-bottom-left-radius: 0.2375rem;
        }
    </style>
    <div id="modalRegister" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >Pay Guider's Cut</h4>
                </div>
                <div class="modal-body">
                    <div class="container text-center">
                        <h4>Invoice #</h4>
                        <p id="invoice"></p>
                        <h4>Guider's Email #</h4>
                        <p id="email"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-left">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    <form action="{{route('admin_guider_pay_with_paypal')}}" method="POST">@csrf
                        <div class="text-right">
                            <input type="hidden" name="guider_payment_id" value="" id="guider_payment_id">
                            <button type="submit" class="btn btn-success" id="pay_btn" onclick="loader123();" >Pay </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

        function loader123(){
            $('#test').removeClass('d-none').addClass('d-block');
        }

        function AjaxRequest(url,data)
        {
            var res;
            $.ajax({
                url: url,
                data: data,
                async: false,
                error: function() {
                    console.log('error');
                },
                dataType: 'json',
                success: function(data) {
                    res= data;

                },
                type: 'POST'
            });

            return res;
        }

        $('#pay').click(function (){
            guider_payment_id= $(this).data("id");
            var data = {'guider_payment_id':guider_payment_id,'_token':'{{csrf_token()}}'};
            var url = '{{route('admin_guider_payment_get_journey_details')}}';
            var res = AjaxRequest(url,data);
            if(res.status==1)
            {
                $('#modalRegister').modal('show');
                $('#guider_payment_id').val(res.res.id);
                $('#pay_btn').text('Pay $'+res.res.get_journies.guiders_cut);
                $('#invoice').text(res.res.get_journies.invoice_number);
                $('#email').text(res.res.get_user.email);
            }
        })


    </script>
@endpush
