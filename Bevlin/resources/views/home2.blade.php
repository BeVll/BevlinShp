<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    @include('layouts.navbar')
    <div class="bg-gray-100 min-h-screen flex justify-center" style="padding: 58px; height: 100%">
        @yield('page_content')
    </div>

</body>
</html>
