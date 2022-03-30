@extends('layout.master')

@section('page_title', 'Pending Transactions')

@section('content')
  <div class="mt-3">
 <h3>Pening Pent Transactions</h3>
  </div>
  <table class="table border">
    <thead>
      <tr>
        <!-- <th scope="col">Car Name</th> -->
        <th scope="col">Scope</th>
        <th scope="col">Price</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <!-- <th scope="col">Customer Name</th>
        <th scope="col">Telephone</th> -->
      </tr>
    </thead>
    <tbody>
        @foreach ($Rents as $rent)
        <tr>
          
          <td>{{$rent->scope}}</td>
          <td>{{$rent->price}}</td>                
          <td>{{$rent->start_date}}</td>
          <td>{{$rent->end_date}}</td>
          <!-- <td>{{$rent->name}}</td>
          <td>{{$rent->contact}}</td> -->
          <td class="right">
              <a type="button"
              href=""
              class="btn btn-info">Aprove</a>

              <a type="button"
              href=""
              class="btn btn-info">Decline</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table> 
@endsection
