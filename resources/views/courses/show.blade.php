@extends('layout')
@section('content')
  
<div class="card">
  <div class="card-header">
    <h2>Courses Details</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: {{ $courses->name }}</h5>
    <p class="card-text">Syllabus: {{ $courses->syllabus }}</p>
    <p class="card-text">Duration: {{ $courses->duration }}</p>
    <hr>
  </div>
</div>

@stop
