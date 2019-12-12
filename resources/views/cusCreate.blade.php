@extends('master')

@section('content')
  <h2> Add New Book </h2>
  <form class="form-horizontal" action="{{route('cusstore')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" id="phone" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" id="address" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Book Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="bookName" id="bookName" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Add Customer</button>
        </div>
      </div>
  </form>
@endsection
