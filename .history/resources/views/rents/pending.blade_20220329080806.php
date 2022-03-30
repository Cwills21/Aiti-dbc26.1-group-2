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
        <th scope="col">Status</th>
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
          <td>{{$rent->approval_status}}</td> 
          <td class="right">
            @if($rent->approval_status=='Pending')
            <a type="button" onclick="return confirm ('Are you sure you want to approve this?')"
              href="{{route('approveRent', ['id' => $rent->id])}}"                           
              class="btn btn-outline-success"><span class="fa fa-thumbs-up"></span>Approve
            </a>
            @elseif($rent->approval_status=='Approved')
            <a type="button" 
              href="#"                           
              class="btn btn-success disabled"><span class="fa fa-check"></span> Approved
            </a>
            @else
            <a type="button" 
              href="#"                           
              class="btn btn-danger disabled"><span class="fa fa-times"></span> Cancelled
            </a>
            @endif
            @if($rent->approval_status=='Pending')
            <a type="button"      
              onclick="return confirm ('Are you sure you want to Cancel this?')"
              href="{{route('declineRent', ['id' => $rent->id])}}"
              class="btn btn-outline-danger"><span class="fa fa-thumbs-down"></span> Decline
            </a>
            @elseif($rent->approval_status=='Approved')
            <a type="button" 
              href="#"                           
              class="btn btn-success disabled"><span class="fa fa-check"></span> Approved
            </a>
            @else
            <a type="button" 
              href="#"                           
              class="btn btn-danger disabled"><span class="fa fa-times"></span> Cancelled
            </a>
            @endif
          </td>
        </tr>
        @endforeach
    </tbody>
  </table> 
@endsection
