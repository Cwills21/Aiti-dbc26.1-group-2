@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')
<div class="row col-md-6 card border border-danger container pt-2">
<form action="/admin" method="PUT" enctype="multipart/form-data">
    @csrf
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

