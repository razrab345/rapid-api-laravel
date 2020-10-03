<!DOCTYPE html>
<html lang="" dir="ltr">
<head>
    <meta charset="utf-8">
<title>  Fonscore</title>
<meta name="description" content="Website description and some little information about it">
<meta name="keywords" content="key, words, website, web">
<meta name="author" content="http://fonscore.com">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">


    <!-- Css -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Правки по сайту -->
		<style>
			.navbar-expand-lg .navbar-nav .nav-link {padding-left: 0 !important;}
			.navbar-brand {color: #fff; font-weight: 800; font-size: 30px;}
		</style>
	<!-- /Правки по сайту -->


    </head>
<body>
  @include('header')
  <section class="mt-20">
        <div class="container-fluid">
            <div class="row">      
  @include('sidebar')
  <div class="content col-xl-8 col-lg-8 col-md-6 col-sm-6">
  @yield('content')
    </div>


</div>
</div>
</section>
    @include('footer')
</body>
</html>