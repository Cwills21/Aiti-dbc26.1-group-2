@extends('layout.master')

@section('page_title', 'Rent a Car')

@section('content')

   <h3>Rent Car: {{$car->Carname}}</h3>

<div class="row col-md-12 card border border-danger container">
<form action="/rent" method="POST" enctype="multipart/form-data">
    @csrf
   
  <div class="mb-3">
    <label for="car_no" class="form-label">Car Number</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('car_no') is-invalid @enderror"
    name="car_no"
    value="$car->car_no}}" >
    @error('car_no')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
    <div class="mb-3">
    <label for="car_brand" class="form-label">Price</label>
    <input type="text" required
    minlength="3" maxlength="10"
    class="form-control @error('car_brand') is-invalid @enderror"
    name="car_brand"
    value="$car->price_within}}" >
    @error('car_brand')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
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

</div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>

@endsection
