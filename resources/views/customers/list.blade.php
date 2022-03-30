@extends('layout.master')

@section('page_title', 'List of Customers')

@section('content')
<div>
    <a href="/customers/add" class="btn btn-info">Add New Customer</a>
</div>
  <table class="table border">
  <thead>
    <tr>
      <th scope="col">Customer Name </th>
      <th scope="col">Contact</th>
      <th scope="col">Residential Address</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($customers as $customer)
      <tr>
        <td>{{$customer->customer_name}}</td>        
        <td>{{$customer->contact}}</td>
        <td>{{$customer->res_address}}</td>
        <td class="right">
            <a type="button"
            href="{{route('updateCustomer', ['id' => $customer->id])}}"
            class="btn btn-primary">Edit</a>

            <button type="button"
            onclick="openModal('{{$customer->Customername}}', '{{$customer->id}}')"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#deleteCarModal">Delete</button>
        </td>
      </tr>

      @endforeach
  </tbody>
</table>

 <form action="/customers" name="delete_form" method="POST">
    @method('DELETE')
    @csrf
    <input type="hidden" id="customer_id_in_form" name="id">
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
            Are you sure you want to delete Customer :
            <strong><em><span id="customer_name_in_modal"></span></em></strong> ?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" onclick="deleteCustomer()" class="btn btn-danger">Yes, delete record</button>
      </div>
    </div>
  </div>
</div>

<script>
    function openModal(customerName, customerId){
       const modalCustomerName = document.getElementById('customer_name_in_modal');
       const formCustomerId = document.getElementById('customer_id_in_form');
       modalCustomerName.textContent = customerName;
       formCustomerId.value = customerId;
    }

    function deleteCustomer(){
        const deleteForm = document.forms['delete_form'];
        deleteForm.submit();
    }
</script>
{{$customers->links()}}
@endsection


