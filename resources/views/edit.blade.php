@extends('master')

@section('content')
  <h2> Update Information </h2>
  <form class="form-horizontal" action="{{ route('update', $book->id) }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_name" id="book_name" value="{{ $book->book_name }}" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Author</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_author" id="book_author" value="{{ $book->book_author }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Publisher</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_publisher" id="book_publisher" value="{{ $book->book_publisher }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Page</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_page" id="book_page" value="{{ $book->book_page }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Edition</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_edition" id="book_edition" value="{{ $book->book_edition }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Language</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_language" id="book_language" value="{{ $book->book_language }}">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="book_price" id="book_price" value="{{ $book->book_price }}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">UPDATE</button>
        </div>
      </div>
  </form>
@endsection
