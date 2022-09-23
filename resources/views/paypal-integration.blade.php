@extends('layouts.main')
@section('content')
    @push('css')
    <style>
        #test {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 9999999;
            width: 100%;
            height: 100%;
            overflow: visible;
            background: rgb(255 255 255 / 75%) url("{{asset('images/loader.gif')}}") no-repeat center center;
            color: #000;
            display: none;
        }
    </style>
    @endpush

    <div class="preloader" id="test" ></div>

    <!-- banner start -->
    <section class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="banner_text my_strip text-center">
                        <h1>Pay via Paypal</h1>
                        <div id="paypal-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

@endsection

@push('js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            // Configure environment
            env: '{{env('ENV')}}',
            client: {
                // sandbox: 'demo_sandbox_client_id',
                {{env('ENV')}}: '{{env('CLIENT_KEY')}}',
                // production: 'ATpQgnWX4rrFUYHFmoPBkHMkyQLj5UnqvVDZhsS83Km2Fzq05topHUcO1M5ramDVOGOF2H3qHI9M-n2H'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'gold',
                shape: 'pill',
            },
            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: '{{$package->price}}',
                            currency: 'USD'
                        }
                    }]
                });
            },

            // Execute the payment
            onAuthorize: function(data, actions) {
                // console.log(data);
                // return false;
                // console.log(data.orderID, data.paymentID);
                var payment_id = data.paymentID;
                var payer_id = data.payerID;
                // return false;
                //

                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    var package_id= {{$package->id}};
                    var data = {'_token':'{{csrf_token()}}','package_id':package_id,'payment_id':payment_id,'payer_id':payer_id};
                    var url = '{{route('package_paypal_post')}}';
                    var res = AjaxRequest(url,data);
                    if(res.status==1)
                    {
                        $('#test').removeClass('d-none').addClass('d-flex');
                        $(this).delay(2000).queue(function() {
                            window.location.replace('{{route('UI_thankyou')}}');
                            $(this).dequeue();
                        });
                    }
                    // window.alert('Thank you for your purchase!');
                });
            }
        }, '#paypal-button');

    </script>

@endpush