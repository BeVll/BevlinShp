<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/23062dce33.js" crossorigin="anonymous"></script>

</head>
<body class="bg-gray-100 m-0 p-0  min-h-screen" style="padding-top: 58px !important;">
        @include('layouts.navbar')
        <section class=" h-auto m-0 p-lg-5 p-sm-0 w-100" style="">
            @yield('page_content')
        </section>
        <section class="bg-primary p-4 my-0 w-100"   >
            fdsfs
        </section>
        <button id="myBtn">Show</button>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="saveToast2" show="true" data-bs-autohide="true" and data-bs-delay="1000" class="toast bg-green-600" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Saved
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                var btn = document.getElementById("myBtn");
                var element = document.getElementById("saveToast2");

                // Create toast instance

            });
            function showTop(){
                var myToast = new bootstrap.Toast(document.getElementById('saveToast'));
                myToast.show();

            }
        </script>
</body>
</html>
