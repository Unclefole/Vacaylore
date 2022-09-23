<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script> -->
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('guider/js/all.js')}}"></script>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('guider/js/custom.js')}}"></script>

<!-- For stripe -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- Toaster JS-->
<script src="{{asset('build/toastr.min.js')}}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-full-width",
        "preventDuplicates": true,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $(document).ready(function () {
        @if(Session::has('success'))
            toastr["success"](' {{ Session::get('success') }}');
        @endif
                @if(Session::has('added'))
            toastr["success"](' {{ Session::get('added') }}');
        @endif
                @if(Session::has('failed'))
            toastr["error"]('{{ Session::get('failed') }}');
        @endif
                @if(Session::has('out_of_stock'))
            toastr["error"]('{{ Session::get('out_of_stock') }}');
        @endif
                @if(Session::has('already_exist'))
            toastr["error"]('{{ Session::get('already_exist') }}');
        @endif
                @if(Session::has('checkFalse'))
            toastr["error"]('{{ Session::get('checkFalse') }}');
        @endif
                @if(Session::has('checkUserRole'))
            toastr["error"]('{{ Session::get('checkUserRole') }}');
        @endif
                @if(Session::has('error'))
            toastr["error"]('{{ Session::get('error') }}');
        @endif
    });
</script>
@stack('js')
