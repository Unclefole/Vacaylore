{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}" />--}}
{{--    <title>Loading ...</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--@csrf--}}
{{--<h1>Page Redirecting</h1>--}}

{{--</body>--}}
{{--</html>--}}
{{--@include('layouts.js')--}}

{{--    <script>--}}
{{--        var v_token = "{{csrf_token()}}";--}}
{{--        $(document).ready(function () {--}}

{{--            let redirect_url = '{{route('UI_redirect_url')}}';--}}

{{--            console.log(v_token);--}}

{{--            let redirect_data = {"_token": v_token, "data": '{{$data}}', "package": '{{$package1}}'};--}}

{{--            let redirect = AjaxRequest(redirect_url, redirect_data);--}}
{{--            console.log(redirect);--}}

{{--            if (redirect.status == 1) {--}}
{{--                window.location = '{{route('UI_pay_with_meta',$package1)}}';--}}
{{--            } else {--}}
{{--                window.location = '{{route('UI_index')}}';--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
