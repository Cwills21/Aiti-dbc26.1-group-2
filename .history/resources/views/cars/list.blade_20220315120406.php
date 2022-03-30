@extends('layout.master')

@section('page_title', 'List of Cars')

@section('content')
<div style="margin-top:70px; padding: 10px;">
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


@endsection
