@extends('layout.master')

@section('page_title', 'My Transactions')

@section('content')
  <div class="mt-3">
 <h3>My Transactions</h3>
  </div>
  <table class="table border">
    <thead>
      <tr>
        <th scope="col">Car Name</th>
        <th scope="col">Scope</th>
        <th scope="col">Price</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Transaction as $Trans)
        <tr>
          <td>{{$Trans->car_brand. ' '. $Trans->car_model. ' '. $Trans->car_no}}</td>
          <td>{{$Trans->scope}}</td>
          <td>{{$Trans->price}}</td>                
          <td>{{$Trans->start_date}}</td>
          <td>{{$Trans->end_date}}</td>
          @if($Trans->approval_status=='Pending')
          <td class="pending">{{$Trans->approval_status}}</td> 
          @else
          <td>{{$Trans->approval_status}}</td> 
          @endif         
        </tr>
        @endforeach
    </tbody>
  </table> 
@endsection
