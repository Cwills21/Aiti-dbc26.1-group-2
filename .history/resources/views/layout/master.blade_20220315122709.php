<!DOCTYPE html>
<html>

<head>
   

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <title>Car Rent &mdash; DBC26.1 G2</title>

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
     <!-- <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" /> -->
     <link rel="stylesheet" href="{{url('css/Style.css')}}"/>
     <link rel="stylesheet" href="{{url('css/details.css')}}"/>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>My Logo</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Collins Car Rental</p>
                <li>                        
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="active">
                <a class="nav-link active" href="{{ route('showAllCars') }}">view Cars</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">About</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Location</a>
                        </li>
                        <li>
                            <a href="#">Send Email</a>
                        </li>
                        <li>
                            <a href="#">Business</a>
                        </li>
                    </ul>
                </li>
                <li>                  
                    <a href="#CustomerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customers</a>
                    <ul class="collapse list-unstyled" id="CustomerSubmenu">
                        
                         
                        <li>
                            <a asp-area="" asp-controller="Customer" asp-action="Index">List</a>
                        </li>
                        <li>
                            <a asp-area="" asp-controller="Customer" asp-action="Create">Add New</a>
                        </li>                        
                    </ul>
                </li>

               <li>                  
                  <a href="#VehicleSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Vehicles</a>
                    <ul class="collapse list-unstyled" id="VehicleSubmenu">
                        
                        <li>
                            <a asp-area="" asp-controller="Vehicle" asp-action="Index">List</a>
                        </li>
                        <li>
                            <a asp-area="" asp-controller="Vehicle" asp-action="Create">Add New</a>
                        </li>
                        
                    </ul>
                </li> 
                <li>                  
                  <a href="#TransSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Transaction</a>
                    <ul class="collapse list-unstyled" id="TransSubmenu">                        
                        <li>
                            <a asp-area="" asp-controller="Transaction" asp-action="Index">List</a>
                        </li>
                        <li>
                            <a asp-area="" asp-controller="Transaction" asp-action="Create">Add New</a>
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
                        <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <button class="nav-item btn btn btn-outline-danger btn-sm">Log Out</button>
                                    </x-responsive-nav-link>
                        </form>          
                        @else
                       
                            <a href="{{ route('login') }}" class="nav-link text-success">Log in</a>
                       
                            @if (Route::has('register'))
                        
                            <a href="{{ route('register') }}" class="nav-link text-info">Register</a>
                      
                            @endif
                        @endauth
    
                    @endif 
                        </ul>
                    </div>
                </div>
            </nav>
            <div>@RenderBody()</div>

       </div>
  </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
   <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
    @await RenderSectionAsync("Scripts", required: false)
</body>

</html>