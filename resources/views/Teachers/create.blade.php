@extends('layout')

@section('content')
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
    <form action="{{ route('teacher.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Save</button>
    </form>
  </div>
</div>
@stop
