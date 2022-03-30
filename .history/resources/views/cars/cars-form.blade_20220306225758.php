@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')

@if($edit)
   <h3>Edit Car: {{$car->Carname}}</h3>
@else
    <h3>Add New Car</h3>
@endif
<div class="row col-md-6 card border border-danger">
<form action="/cars" method="POST" enctype="multipart/form-data">
    @csrf
    @if($edit)
    <input type="hidden" name="id" value="{{$car->id}}">
    @method('PUT')
    @endif

  <div class="mb-3">
    <label for="car_no" class="form-label">Car Number</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('car_no') is-invalid @enderror"
    name="car_no"
    value="{{old('car_no') ? old('car_no') : $car->car_no}}" >
    @error('car_no')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <div class="mb-3">
    <label for="car_brand" class="form-label">Car Brand</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('car_brand') is-invalid @enderror"
    name="car_brand"
    value="{{old('car_brand') ? old('car_brand') : $car->car_brand}}" >
    @error('car_brand')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror

  <div class="mb-3">
    <label for="car_model" class="form-label">Car_Model</label>
    <input type="text" required
    minlength="4" maxlength="20"
    class="form-control @error('car_model') is-invalid @enderror"
    name="car_model"
    value="{{old('car_model') ? old('car_model') : $car->car_model}}" >
    @error('car_model')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="dob" class="form-label">Date Of Birth</label>
    <input type="date" required
    class="form-control @error('dob') is-invalid @enderror"
    name="dob"
    value="{{old('date_of_birth') ? old('dob') : $student->date_of_birth}}" >
    @error('dob')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>  

<div class="mb-3 form-group">
<label for="dob" class="form-label">Choose gender</label>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="Male" name="gender" required="" @if($student->gender == 'Male') checked @endif>
    <label class="form-check-label" for="Gender">
    MALE
    </label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" value="Female" name="gender" required="" @if($student->gender == 'Female') checked @endif>
    <label class="form-check-label" for="Gender">
    FEMALE
    </label>
    </div>
</div>

<div class="mb-3">
    <label for="contact" class="form-label">Tel. Number</label>
    <input type="text" required
    minlength="10" maxlength="10"
    class="form-control @error('contact') is-invalid @enderror"
    name="contact"
    value="{{old('contact') ? old('contact') : $student->contact}}" >
    @error('contact')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="picture" class="form-label">Student Picture</label>
    <input type="file" required
    class="form-control @error('picture') is-invalid @enderror"
    name="picture"
    value="{{old('picture') ? old('picture') : $student->picture}}" >
    @error('picture')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="dob" class="form-label">Select Programme</label>
  <select name="programme_id" class="form-control select2">
    <option>--SELECT PROGRAMME--</option>
    @foreach ($programmes as $programme)
    <option value="{{$programme->id}}" @if($student->programme_id == $programme->id) selected @endif>{{$programme->name}} ({{$programme->programme_id}})</option>
    @endforeach
  </select>

</div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>

@endsection
