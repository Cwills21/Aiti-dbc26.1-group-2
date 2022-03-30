<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>DBC26.1 Group 2</title>
	<!-- core CSS -->
  <!-- CSS only -->
    
    <link href="{{url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{url('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{url('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{url('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{url('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{url('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{url('css/gallery-1.css') }}" rel="stylesheet">
    <link href="{{url('css/styles.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
 
   
    <!-- [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script> 
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
</head> 

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<i class="fa fa-car" aria-hidden="true"></i>
                    <div class="logoSection">
                    <a class="navbar-brand" href="/">DBC26.1</a>
					<!-- <span class="caption">Car Rental</span> -->
					</div>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li> 
                        <li class="scroll"><a href="#services">Our Service</a></li>
                        <li class="scroll"><a href="#about">About Us</a></li>
                        <li class="scroll"><a href="{{ route('showAllCars') }}">view Cars</a></li>
                        <li class="scroll"><a href="#portfolio">Our Cars</a></li>
                        <li class="scroll"><a href="#our-team">Team</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#contact-us">Contact</a></li>    
                        @if (Route::has('login'))   
                        @auth          
                        <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <li class="scroll">Log Out</li>
                                    </x-responsive-nav-link>
                        </form>          
                        @else
                        <li class="scroll">
                            <a href="{{ route('login') }}" class="nav-link text-success">Log in</a>
                        </li>
                            @if (Route::has('register'))
                        <li class="scroll">
                            <a href="{{ route('register') }}" class="nav-link text-info">Register</a>
                        </li>
                            @endif
                        @endauth
    
                    @endif                    
                    </ul>
                   
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <main class="flex-shrink container mt-5">
  <div class="container mt-5">
        @include('common.alert')
        {{-- @include('common.errors') --}}
        @yield('content')
    </div>
</main>
    <!-- <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2022 DBC26.1 G2. <a href="#" target="_blank">Free Bootstrap Template</a> by WebThemez.com
                </div>
            </div>
        </div>
    </footer> -->
<!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    
    
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/mousescroll.js')}}"></script>
    <script src="{{url('js/smoothscroll.js')}}"></script>
    <script src="{{url('js/jquery.prettyPhoto.js')}}"></script> 
    <script src="{{url('js/jquery.inview.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
 
    <script type="text/javascript" src="{{url('js/jquery.isotope.min.js')}}"></script><!-- Gallery Filter -->
	<script type="text/javascript" src="{{url('js/jquery.magnific-popup.min.js')}}"></script><!-- Gallery Popup -->
	 
    <script src="{{url('js/custom-scripts.js')}}"></script>
</body>
</html>