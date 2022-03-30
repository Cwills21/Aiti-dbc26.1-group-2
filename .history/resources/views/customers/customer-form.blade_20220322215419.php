@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')

@if($edit)
   <h3>Edit Car: {{$car->Carname}}</h3>
@else
    <h3>Add New Car</h3>
@endif
<div class="row col-md-12 card border border-danger">
<form action="/cars" method="POST" enctype="multipart/form-data">
    @csrf
    @if($edit)
    <input type="hidden" name="id" value="{{$car->id}}">
    @method('PUT')
    @endif

  <div class="mb-3">
      <label for="user_id" class="form-label">User Id</label>
      <input type="text" required class="form-control" name="user_id"
      value="{{session('user_id')}}">
  </div>
  <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" required
      minlength="3" maxlength="100"
      class="form-control @error('name') is-invalid @enderror"
      name="name"
      value="{{old('name') ? old('name') : $car->name}}" >
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>
  <div class="mb-3">
      <label for="contact" class="form-label">Telephone</label>
      <input type="text" required
      minlength="10" maxlength="10"
      class="form-control @error('contact') is-invalid @enderror"
      name="contact"
      value="{{old('contact') ? old('contact') : $car->contact}}" >
      @error('contact')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>
  <div class="mb-3">
      <label for="address" class="form-label">Residential Address</label>
      <input type="text" required
      minlength="2" maxlength="100"
      class="form-control @error('address') is-invalid @enderror"
      name="address"
      value="{{old('address') ? old('address') : $car->address}}" >
      @error('address')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>



<div class="mb-3">
    <label for="price_within" class="form-label">Price Within</label>
    <input type="number" required
   
    class="form-control @error('price_within') is-invalid @enderror"
    name="price_within"
    value="{{old('price_within') ? old('price_within') : $car->price_within}}" >
    @error('price_within')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="price_outside" class="form-label">Price Outside</label>
    <input type="number" required
    class="form-control @error('price_outside') is-invalid @enderror"
    name="price_outside"
    value="{{old('price_outside') ? old('price_outside') : $car->price_outside}}" >
    @error('price_outside')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="picture" class="form-label">Car Picture</label>
    <input type="file" required
    class="form-control @error('picture') is-invalid @enderror"
    name="picture"
    value="{{old('picture') ? old('picture') : $car->picture}}" >
    @error('picture')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

</div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>

@endsection