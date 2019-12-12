@extends('master')

@section('content')
  <h2> Update Information </h2>
  <form class="form-horizontal" action="{{ route('cusupdate', $cus->id) }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" value="{{ $cus->name }}" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" id="phone" value="{{ $cus->phone }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" id="address" value="{{ $cus->address }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Book Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="bookName" id="bookName" value="{{ $cus->bookName }}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">UPDATE</button>
        </div>
      </div>
  </form>
@endsection
