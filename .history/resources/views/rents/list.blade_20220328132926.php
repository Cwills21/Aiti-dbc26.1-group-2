@extends('layout.master')

@section('page_title', 'Pending Transactions')

@section('content')

  <table class="table border">
    <thead>
      <tr>
        <th scope="col">Car Name</th>
        <th scope="col">Scope</th>
        <th scope="col">Price</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Telephone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Rents as $rent)
        <tr>
          <td>{{$rent->Carname}}</td>        
          <td>{{$rent->scope}}</td>
          <td>{{$rent->price}}</td>                
          <td>{{$rent->start_date}}</td>
          <td>{{$rent->end_date}}</td>
          <td>{{$rent->name}}</td>
          <td>{{$rent->contact}}</td>
          <td class="right">
              <a type="button"
              href="{{route('updateCar', ['id' => $car->id])}}"
              class="btn btn-info">Aprove</a>

              <button type="button"
              onclick="openModal('{{$car->Carname}}', '{{$car->id}}')"
              class="btn btn-danger"
              data-bs-toggle="modal"
              data-bs-target="#deleteCarModal">Decline</button>
          </td>
        </tr>

        @endforeach
    </tbody>
  </table>
  {{$cars->links()}}
 <form action="/cars" name="delete_form" method="POST">
    @method('DELETE')
    @csrf
    <input type="hidden" id="car_id_in_form" name="id">
</form>
@endsection

@section('modal')
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

@endsection