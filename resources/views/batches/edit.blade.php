@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-header">Update Batch</div>
    <div class="card-body">
        
        <form action="{{ route('batches.update', $batches->id) }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $batches->id }}" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"></br>
            <label>Course</label></br>
            <input type="text" name="course_id" id="syllabus" value="{{ $batches->course_id }}" class="form-control"></br>
            <label>Start Date</label></br>
            <input type="text" name="course_date" id="duration" value="{{ $batches->start_date }}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
       
    </div> 
</div>
 
@stop
