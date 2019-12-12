@extends('master')

@section('content')
  <h2> Add New Book </h2>
  <form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate>
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_name" id="book_name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Author</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_author" id="book_author" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Publisher</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_publisher" id="book_publisher" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Page</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_page" id="book_page" required data-parsley-type="integer"
>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Edition</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_edition" id="book_edition" required data-parsley-type="integer"
>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Language</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_language" id="book_language" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_price" id="book_price" required data-parsley-type="integer">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Add Book</button>
        </div>
      </div>
  </form>
@endsection
