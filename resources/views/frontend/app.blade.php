<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Casino" name="description" />
    <meta content="N2R Technologies" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/front/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Fonts -->
    <!-- App css -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/front/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/front/css/new-style.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" type="text/javascript" src="assets/front/js/jquery-2.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/front/js/bootstrap.min.js"></script>
</head>


<body>
        @include('frontend.sections.navbar')
    
    @yield('content')
    
    <!-- App Scripts -->
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
