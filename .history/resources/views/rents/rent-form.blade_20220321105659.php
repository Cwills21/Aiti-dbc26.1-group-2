@extends('layout.master')

@section('page_title', 'Rent a Car')

@section('content')

   <h3>Rent Car: {{$car->Carname}}</h3>

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
<label for="dob" class="form-label">Choose Scope</label>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="in" name="scope" required="">
    <label class="form-check-label" for="scope">
    Inside Accra {{"[$car->price_within]"}}
    </label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="out" name="scope" required="" >
    <label class="form-check-label" for="scope">
    Outside Accra {{"[$car->price_outside]"}}
    </label>
    </div>
</div>

  <!-- <div class="mb-3">
    <label for="car_model" class="form-label">Car_Model</label>
    <input type="text" required
    minlength="4" maxlength="20"
    class="form-control @error('car_model') is-invalid @enderror"
    name="car_model"
    value="{{old('car_model') ? old('car_model') : $car->car_model}}" >
    @error('car_model')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
 </div> -->


<!-- <div class="mb-3">
    <label for="year_of_reg" class="form-label">Year Of Reg</label>
    <input type="text" required
    class="form-control @error('year_of_reg') is-invalid @enderror"
    name="year_of_reg"
    value="{{old('year_of_reg') ? old('year_of_reg') : $car->year_of_reg}}" >
    @error('year_of_reg')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>   -->



<!-- <div class="mb-3">
    <label for="price_within" class="form-label">Price Within</label>
    <input type="number" required
   
    class="form-control @error('price_within') is-invalid @enderror"
    name="price_within"
    value="{{old('price_within') ? old('price_within') : $car->price_within}}" >
    @error('price_within')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> -->

<!-- <div class="mb-3">
    <label for="price_outside" class="form-label">Price Outside</label>
    <input type="number" required
    class="form-control @error('price_outside') is-invalid @enderror"
    name="price_outside"
    value="{{old('price_outside') ? old('price_outside') : $car->price_outside}}" >
    @error('price_outside')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> -->

<!-- <div class="mb-3">
    <label for="picture" class="form-label">Car Picture</label>
    <input type="file" required
    class="form-control @error('picture') is-invalid @enderror"
    name="picture"
    value="{{old('picture') ? old('picture') : $car->picture}}" >
    @error('picture')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> -->
  <div class="mb-3">
  <button type="submit" class="btn btn-primary ">Submit</button>
  </div>
</form>
</div>

@endsection
