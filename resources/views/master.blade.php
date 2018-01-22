<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="/js/jquery-1.7.2.min.js"></script>
    <script src="/js/maps.js"></script>
    <script src="/js/style.js"></script>

</head>
<body onload="onLoad()">

@include('header')

<div class="container-fluid" style="width:92%; margin:0px auto;min-height:750px; ">
    @yield('content')
</div>
@include('footer')
<!-- script -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script></body>
<script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
</html>