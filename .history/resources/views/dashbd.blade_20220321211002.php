@extends('layout.master')

@section('page_title', 'Welcome')

@section('content')

<div class="top-content">
        	<div class="container-fluid">
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
        	</div>
        </div>

        <!-- Section 1 -->
        <div class="container-fluid">
	        <!-- <div class="container"> -->
	            <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h1>The Best Place to rent a reliable but affordable car</h1>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	This is a free <strong>Car Rental App</strong>Developed by<strong>AITI CASE</strong>DBC26.1
	                    	<strong>Group 2</strong> Members using Laravel
	                    </p>
	                </div>
	            </div>
	            <div class="row">
				@foreach ($cars as $car)
                	<div class="col-md-3 section-1-box wow fadeInUp">
                		<div class="row card">
                			<div class="col-md-12">
							   <h5 class="font-monospace">{{$car->Carname}}</h5>	                    		
								<a href="#"><img src="{{asset($car->picture)}}" alt="Image" class="img-fluid"></a>								
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

        <!-- Section 2 -->
        <div class="section-2-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-2 section-description wow fadeIn">
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col section-2-box wow fadeInLeft">
                    	<h3>Section 2</h3>
                    	<p class="medium-paragraph">
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    		sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                    	</p>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    		Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    	</p>
	                </div>
	            </div>
	        </div>
        </div>

		<!-- Section 3 -->
        <div class="section-3-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div class="col section-3 section-description wow fadeIn">
	                    <h2>Section 3</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Ut wisi enim ad minim</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-pencil-alt"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Sed do eiusmod tempor</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fas fa-cloud"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Quis nostrud exerci tat</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<div class="section-3-box-icon">
	                				<i class="fab fa-google"></i>
	                			</div>
	                		</div>
	                		<div class="col-md-9">
	                			<h3>Minim veniam quis nostrud</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

		<!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col section-4 section-description wow fadeInLeftBig">
	                	<h2>Section 4</h2>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	&copy; Bootstrap 4 Carousel with Multiple Items. Download it for free on <a href="https://azmind.com">AZMIND</a>.
                    </div>
                    
                </div>
	        </div>
                	
        </footer>
@endsection