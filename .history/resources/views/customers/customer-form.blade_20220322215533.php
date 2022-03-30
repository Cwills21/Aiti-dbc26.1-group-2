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
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>

@endsection
