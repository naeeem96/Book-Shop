@extends('master')

@section('content')
  <h2> Create New Students </h2>
  <form class="form-horizontal" action="{{ route('update', $student->id) }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="registration_id">Registration NO</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="registration_id" id="registration_id" value="{{ $student->registration_id }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="dept_name">Department</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="dept_name" id="dept_name" value="{{ $student->dept_name }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="info">Info</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="info" id="info" rows="10"> {!! $student->info !!}  </textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Register Student</button>
        </div>
      </div>
  </form>
@endsection
