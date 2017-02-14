<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../../../public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../public/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="../../../public/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../../../public/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../../../public/js/modernizr.custom.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="../../../public/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
      <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top" style="background-color:#ff9900;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="{{url('/')}}">CENIXOFT</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{url('/')}}" class="page-scroll">Home</a></li>
              <li><a href="{{url('document')}}" class="page-scroll">Documents</a></li>
              <li><a href="{{url('education')}}" class="page-scroll">Education Zone</a></li>
              <!-- <li><a href="#tf-contact" class="page-scroll">Contact</a></li> -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="../../../public/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../public/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../../../public/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../../public/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="../../../public/js/jquery.isotope.js"></script>

    <script src="../../../public/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../../../public/js/main.js"></script>
</body>
</html>
