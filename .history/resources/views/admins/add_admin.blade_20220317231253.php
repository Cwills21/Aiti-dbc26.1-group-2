@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')
<div class="row col-md-4 card border border-danger container pt-2">
<form action="/admin" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
<select name="id" class="form-control">
  <option>Select User</option>
  @foreach ($admins as $admin)
  <option value="{{$admin->id}}">{{$admin->name}}  [{{$admin->email}}]</option>
  @endforeach
 </select>
    </div>
 <div class="form-group">
 <button type="submit" class="btn btn-primary form-control">Submit</button>
</div>
</form>
</div>

@endsection


<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Select User to add as an Admin</h3>

            <form action="/admin" method="POST" class="px-md-2">
              @csrf
              @method('PUT')
                           

              <div class="mb-4">

                <select class="select">
                  <option value="1" disabled>Class</option>
                  <option value="2">Class 1</option>
                  <option value="3">Class 2</option>
                  <option value="4">Class 3</option>
                </select>

              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>