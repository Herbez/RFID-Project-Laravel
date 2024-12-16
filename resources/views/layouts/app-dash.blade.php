<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->

    <title>{{ config('app.name', 'Student-Card') }} - @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{ asset('assets/demo/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/demo/chartist-plugin-tooltip.css') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('assets/css/graindashboard.css') }}">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">

<script src="{{ asset('assets/js/graindashboard.js') }}"></script>
<script src="{{ asset('assets/js/graindashboard.vendor.js') }}"></script>

@include('components.header')

<main class="main">
    @include('components.sidebar')

<div class="content">
    @yield('content')
    @include('components.footer')
</div>
</main>

<!-- DEMO CHARTS -->
<script src="{{('assets/demo/resizeSensor.js') }}"></script>
<script src="{{asset('assets/demo/chartist.js') }}"></script>
<script src="{{asset('assets/demo/chartist-plugin-tooltip.js') }}"></script>
<script src="{{asset('assets/demo/gd.chartist-area.js') }}"></script>
<script src="{{asset('assets/demo/gd.chartist-bar.js') }}"></script>
<script src="{{asset('assets/demo/gd.chartist-donut.js') }}"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
