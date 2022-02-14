<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Mobile-Home</title>
    @include('frontend.include.styles')
</head>

<body class="sb-nav-fixed">
   {{-- @include('frontend.include.navbar') --}}
    <div id="layoutSidenav">
        @include('frontend.include.header')
        @yield('content')
    </div>
@include('frontend.include.scripts')
</body>

</html>
