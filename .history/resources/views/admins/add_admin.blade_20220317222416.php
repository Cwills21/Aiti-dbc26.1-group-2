@extends('layout.master')

@section('page_title', 'Add a Car')

@section('content')
<div class="row col-md-12 card border border-danger container">
<select class="js-example-placeholder-single js-states form-control">
  <option></option>
  @foreach ($admins as $admin)
  <option value="{{$admin->id}}">{{$admin->name}}  [{{$admin->email}}]</option>
  @endforeach
 </select>
</div>

<script>
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state",
    allowClear: true
});
</script>
@endsection