<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blank page - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    {{-- <link rel="stylesheet" href="{{ Vite::asset('resource/css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resource/css/tabler-flags.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resource/css/tabler-payments.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resource/css/tabler-vendors.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-flags.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-payments.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}">

    <style>
        .min-screen {
            min-height: 75vh;
        }
    </style>
    @vite([])
</head>

<body>
    <div class="wrapper" id="app">
        @include('layouts.header')
        @include('layouts.navbar')
        <div class="page-wrapper">
            <div class="container-xl">
                <div class="page-body">
                    <div class="container-xl d-flex flex-column justify-content-center">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    {{-- <script src="{{ Vite::asset('resource/js/demo.min.js') }}"></script>
    <script src="{{ Vite::asset('resource/js/tabler.min.js') }}"></script> --}}
    <script src="{{ asset('js/demo.min.js') }}"></script>
    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
