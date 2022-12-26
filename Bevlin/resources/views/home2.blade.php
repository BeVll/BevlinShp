
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);

    </head>
<body class="bg-gray-100 m-0 p-0  min-h-screen" style="padding-top: 58px !important;">

        @include('layouts.navbar')
        <section class=" h-auto m-0 p-lg-5 p-sm-0 w-100" style="">
            @yield('page_content')
        </section>
        <section class="bg-primary p-4 my-0 w-100"   >
            fdsfs
        </section>
        <button id="ntgg" onclick="showTop()">dsds</button>
        <script>
            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
            window.addEventListener("load", showLa);
            async function showLa(){
                if(document.getElementById("saveToast") != null){
                    console.log('exist');
                    await sleep(5000);
                    var element = document.getElementById("saveToast");

                    // Create toast instance
                    var myToast = new bootstrap.Toast(element);
                    myToast.show();
                }
            }

        </script>
</body>
</html>
