<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('page_title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('styles/cangrid/css/cangrid.css') }}>


    @yield('additional_css')
    

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    @yield('additional_js_head')

</head>

<body>

    @include('partials.header')

    <div class="page-wrapper grid-wrapper">
        @yield('page_body')

    </div>

    <script type="text/javascript" src="scripts/helpers.js"></script>
    @yield('additional_js_body')
</body>
</html>

    