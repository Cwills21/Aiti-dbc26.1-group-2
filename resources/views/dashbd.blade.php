@extends('layout.master')

@section('page_title', 'Welcome')

@section('content')

<div class="top-content">
        	<!-- <div class=""> -->
        		<div id="carousel-example" class="carousel slide" data-ride="carousel">
        			<div class="carousel-inner row w-100 mx-auto" role="listbox">
            			<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="assets/img/backgrounds/car-1.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-3.jpg" class="img-fluid mx-auto d-block" alt="img2">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-4.jpg" class="img-fluid mx-auto d-block" alt="img3">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-6.jpg" class="img-fluid mx-auto d-block" alt="img4">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/bg_1.jpg" class="img-fluid mx-auto d-block" alt="img5">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-8.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-9.jpg" class="img-fluid mx-auto d-block" alt="img7">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="assets/img/backgrounds/car-10.jpg" class="img-fluid mx-auto d-block" alt="img8">
						</div>
        			</div>
        			<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
        		</div>
        	<!-- </div> -->
        </div>

        <!-- Section 1 -->
        <div class="">
	        <!-- <div class="container"> -->
	            <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h3>You can search your choice of car below</h3>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>	                   
	                </div>
	            </div>
				<div class="mb-2 col-md-6">
				 <form class="d-flex" method="GET" action="{{route('dashbd')}}">
						<input class="form-control me-2" type="search"	name="search" placeholder="Search Car"aria-label="Search">	
						
						<div class="col-md-3">  
						<button class="btn btn-outline-success" type="submit">Search</button>
						</div>					 
				 </form>
				</div>
	            <div class="row">
				@foreach ($cars as $car)
                	<div class="col-md-3 section-1-box wow fadeInUp">
                		<div class="row card mb-4">
                			<div class="col-md-12">
							   <h5 class="font-monospace">{{$car->Carname}}</h5>	                    		
								<a href="#"><img src="{{asset($car->picture)}}" alt="Image" class="img-fluid rounded"></a>								
								<h5><span>Ghc{{$car->price_within}}</span>/day</h5>
								<h3><a href="{{route('rentCar', ['id' => $car->id])}}" class="btn btn-primary">Rent Now</a></h3>							
	                    		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p> -->
	                    	</div>
	                    </div>
                    </div><br><br><br>
				@endforeach 
	            </div><br>
	        <!-- </div> -->
        </div>

        

        <!-- Footer -->
        <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	&copy; Car Rental App by Aiti DbC26.1 Group2 <a href="">Our Link</a>
                    </div>
                    
                </div>
	        </div>
                	
        </footer>
@endsection