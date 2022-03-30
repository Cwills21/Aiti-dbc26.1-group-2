<!DOCTYPE html>
<html>

<head>
   

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car Rent &mdash; DBC26.1 G2</title>
     <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS --> 
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">

     <!-- <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" /> -->
     <link rel="stylesheet" href="{{url('css/Style.css')}}"/>
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
                            <!-- <a asp-area="" asp-controller="Customer" asp-action="Index">List</a> -->
                        </li>
                        <li>
                            <!-- <a asp-area="" asp-controller="Customer" asp-action="Create">Add New</a> -->
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
                       
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                       
                            @if (Route::has('register'))
                        
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                      
                            @endif
                        @endauth
    
                    @endif 
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
            @include('common.alert')
            {{-- @include('common.errors') --}}
            @yield('content')
            </div>

       </div>
  </div>

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
    <script src="{{url('js/bootstrap.js')}}"></script>
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</body>
</html>