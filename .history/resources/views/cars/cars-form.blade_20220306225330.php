@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')

@if($edit)
   <h3>Edit Cart: {{$car->Carname}}</h3>
@else
    <h3>Add New Car</h3>
@endif
<div class="row col-md-6 card border border-danger">
<form action="/students" method="POST" enctype="multipart/form-data">
    @csrf
    @if($edit)
    <input type="hidden" name="id" value="{{$student->id}}">
    @method('PUT')
    @endif

  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('firstname') is-invalid @enderror"
    name="firstname"
    value="{{old('firstname') ? old('firstname') : $student->firstname}}" >
    @error('firstname')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" required
    minlength="3" maxlength="50"
    class="form-control @error('lastname') is-invalid @enderror"
    name="lastname"
    value="{{old('lastname') ? old('lastname') : $student->lastname}}" >
    @error('lastname')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror

  <div class="mb-3">
    <label for="student_id" class="form-label">Student ID</label>
    <input type="text" required
    minlength="4" maxlength="20"
    class="form-control @error('student_id') is-invalid @enderror"
    name="student_id"
    value="{{old('student_id') ? old('student_id') : $student->student_id}}" >
    @error('student_id')
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
