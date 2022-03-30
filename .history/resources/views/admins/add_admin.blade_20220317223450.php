@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')
<div class="row col-md-6 card border border-danger container pt-2">
<form action="/admins" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
<select name="admin_id" class="js-example-placeholder-single js-states form-control">
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

