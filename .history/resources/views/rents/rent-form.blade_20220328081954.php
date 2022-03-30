
@extends('layout.master')

@section('page_title', 'Rent a Car')

@section('content')

   <h3>Rent Car: {{$car->Carname}}</h3>
   <!-- <h4>{{Auth::customers()->customer_name}}</h4>-->
<div class="row col-md-6 card border border-danger container">
<form action="/rent" method="POST" enctype="multipart/form-data">
    @csrf
   
  <div class="mb-3">
    <label for="car_no" class="form-label">Car Number</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('car_no') is-invalid @enderror"
    name="car_no"
    value="{{$car->car_no}}" >
    @error('car_no')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3 form-group">
<label for="dob" class="form-label text-primary">Choose Scope</label>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="in" name="scope" required="">
    <label class="form-check-label" for="scope">
    Inside Accra {{"[Ghc $car->price_within/Day]"}}
    </label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="out" name="scope" required="" >
    <label class="form-check-label" for="scope">
    Outside Accra {{"[Ghc $car->price_outside/Day]"}}
    </label>
    </div>
</div>

<div class="mb-3">
    <label for="start_date" class="form-label">Start Date</label>
    <input type="date" required
    class="form-control @error('start_date') is-invalid @enderror"
    name="start_date"
    value="" >
    @error('start_date')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> 
<div class="mb-3">
    <label for="end_date" class="form-label">End Date</label>
    <input type="date" required
    class="form-control @error('end_date') is-invalid @enderror"
    name="end_date"
    value="" >
    @error('end_date')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> 

  <div class="mb-3">
  <button type="submit" class="btn btn-outline-primary ">Submit</button>
  </div>
</form>
</div>

@endsection
