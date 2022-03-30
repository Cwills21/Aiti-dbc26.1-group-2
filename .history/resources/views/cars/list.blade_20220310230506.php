@extends('layout.master')

@section('page_title', 'List of Cars')

@section('content')
<div class="bg-grey mt-5">
<div>
    <a href="/cars/add" class="btn btn-info">Add New Car</a>
</div>
  <table class="table border">
  <thead>
    <tr>
      <th scope="col">car_no </th>
      <th scope="col">car_brand</th>
      <th scope="col">car_model</th>
      <th scope="col">Picture</th>
      <th scope="col">year_of_reg</th>
      <th scope="col">price_within</th>
      <th scope="col">price_outside</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($cars as $car)
      <tr>
        <td>{{$car->car_no}}</td>        
        <td>{{$car->car_brand}}</td>
        <td>{{$car->car_model}}</td>
        <td><img style="height:80px" src="{{asset($car->picture)}}" class="img-thumbnail rounded"></td>          
        <td>{{$car->year_of_reg}}</td>
        <td>{{$car->price_within}}</td>
        <td>{{$car->price_outside}}</td>
        <td class="right">
            <a type="button"
            href="{{route('updateCar', ['id' => $car->id])}}"
            class="btn btn-info">Edit</a>

            <button type="button"
            onclick="openModal('{{$car->Carname}}', '{{$car->id}}')"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#deleteCarModal">Delete</button>
        </td>
      </tr>

      @endforeach
  </tbody>
</table>

 <form action="/cars" name="delete_form" method="POST">
    @method('DELETE')
    @csrf
    <input type="hidden" id="car_id_in_form" name="id">
</form>

{{-- confirmation modal --}}
<div class="modal fade" tabindex="-1" id="deleteCarModal"
data-bs-backdrop="static"
data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            Are you sure you want to delete Car :
            <strong><em><span id="car_name_in_modal"></span></em></strong> ?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" onclick="deleteCar()" class="btn btn-danger">Yes, delete record</button>
      </div>
    </div>
  </div>
</div>
</div>

<script>
    function openModal(carName, carId){
       const modalCarName = document.getElementById('car_name_in_modal');
       const formCarId = document.getElementById('car_id_in_form');
       modalCarName.textContent = carName;
       formCarId.value = carId;
    }

    function deleteCar(){
        const deleteForm = document.forms['delete_form'];
        deleteForm.submit();
    }
</script>
{{$cars->links()}}

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="img/bg_1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="img/bg_1.jpg" style="width:100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="img/bg_2.jpg" style="width:100%">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="img/bg_3.jpg" style="width:100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="img/car-1.jpg" style="width:100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
