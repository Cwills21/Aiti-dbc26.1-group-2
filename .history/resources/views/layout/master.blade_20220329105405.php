<!DOCTYPE html>
<html>
<head>
   <style>
       .pending{
        animation-name: pending;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }
    
    @keyframes pending {
        0%   {color:rgb(128, 0, 0);left:0px;}
        50%  {color:white ; margin-left:0px}
        100% {color:rgb(128, 0, 0);left:0px;}
    }
   </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car Rent &mdash; DBC26.1 G2</title>
    
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
     <link rel="stylesheet" href="{{url('css/style.css')}}"/>
     <link rel="stylesheet" href="{{url('css/details.css')}}"/>
   
     <!-- CSS -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
        <!-- <link rel="stylesheet" href="{{url('assets/css/style.css')}}"> -->
        <link rel="stylesheet" href="{{url('assets/css/media-queries.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/carousel.css')}}">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{url('assets/ico/favicon.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('assets/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{url('assets/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>My Logo</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Group 2 Car Rental</p>
                <li class="active">
                    <a class="nav-link active" href="{{ route('dashbd') }}">Dashboard</a>
                </li>
                <li class="active">
                    <a class="nav-link active" href="{{ route('dashbd') }}">View cars</a>
                </li>
               @if(Auth::User()->user_type == 'Admin')  
                <li>
                    <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-white" style="background:#17a2b8; color:white">Admin</a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">
                        <li class="active">
                           <a class="nav-link active" href="{{ route('showAllCars') }}">view Cars</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="{{route('showAddAdmin')}}">Add admin user</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="#">View Customers</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="{{route('PendingRent')}}">Pending Transactions</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="#">Approved Transactions</a>
                        </li>
                    </ul>
                </li>
               @endif
                <li>
                    <a href="#clientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-white" style="background:#17a2b8; color:white">My Account</a>
                    <ul class="collapse list-unstyled" id="clientSubmenu">
                        <li>
                            <a style="background:#17a2b8; color:white" href="{{route('AddProfile')}}">Add Profile</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="#">History</a>
                        </li>
                        <li>
                            <a style="background:#17a2b8; color:white" href="#">Pending Transactions</a>
                        </li>
                    </ul>
                </li>
            </ul>                    
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
    
            <nav class="navbar navbar-expand-lg navbar-light" style="background:#17a2b8">
                <div class="container-fluid">
    
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                    @if (Route::has('login'))                        
                        @auth    
                        <h6 class="text-warning">Welcome: {{Auth::user()->name}}</h6>
                        <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <button class="nav-item btn btn btn-outline-danger btn-sm">Log Out</button>
                                    </x-responsive-nav-link>
                        </form>          
                        @else
                       
                            <!-- <a href="{{ route('login') }}" class="nav-link">Log in</a> -->
                       
                            @if (Route::has('register'))
                        
                            <!-- <a href="{{ route('register') }}" class="nav-link">Register</a> -->
                      
                            @endif
                        @endauth
    
                    @endif 
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid content">
            @include('common.alert')
            {{-- @include('common.errors') --}}
            @yield('content')
            </div>
    
       </div>
    </div>

          @yield('modal')

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
   
   <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
   
   <script src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{url('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="{{url('assets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
   
</body>
</html>