@extends('layout.master')

@section('page_title', 'Pending Transactions')

@section('content')
  <div class="mt-3">
 <h3>Pending Rent Transactions</h3>
  </div>
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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Rents as $rent)
        <tr>
          <td>{{$rent->car_brand. ' '. $rent->car_model. ' '. $rent->car_no}}</td>
          <td>{{$rent->scope}}</td>
          <td>{{$rent->price}}</td>                
          <td>{{$rent->start_date}}</td>
          <td>{{$rent->end_date}}</td>
          <td>{{$rent->customer_name}}</td>
          <td>{{$rent->contact}}</td> 
          <td class="right">
              <a type="button" onclick="return testConfirm ('Are you sure you want to approve this?')"
              href="{{route('approveRent', ['id' => $rent->id])}}"
              class="btn btn-outline-success">Aprove</a>

              <a type="button"
              href="{{route('declineRent', ['id' => $rent->id])}}"
              class="btn btn-outline-danger">Decline</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table> 
@endsection
<script>
function testConfirm() {

var $dialog = $('<div></div>')
  .html("Are you sure you want to delete?")
  .dialog({
    resizable: false,
    title: "Confirm Deletion",
    modal: true,
    buttons: {
      Cancel: function() {
        $(this).dialog("close");
      },
      "Delete": function() {
        //some stuff
        $(this).dialog("close");
      }
    }
  });

$dialog.dialog('open');
}
</script>