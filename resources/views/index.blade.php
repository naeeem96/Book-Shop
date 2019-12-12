@extends('master')

@section('content')
    <h1> Books Details </h1>

    <form class="" action="{{ route('search') }}" method="get">
      {{ csrf_field() }}
      Search by Title, Author, Publisher, Language
      <input type="text" name="search" class="form-control">
      <button type="submit" class="btn btn-success" value="search">Search</button>
    </form>


    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('create') }}">Create</a></li>
      </ul>
    </div><!--/.nav-collapse -->

    <table class="table table-resposive table hover">
        <tr>
            <th> # </th>
            <th> Title </th>
            <th> Author </th>
            <th> Publisher </th>
            <th> Edition </th>
            <th> Num of Page </th>
            <th> Language </th>
            <th> Price </th>
            <th>  </th>
            <th>  </th>
        </tr>
       @php $i = 0; @endphp
       <?php foreach ($books as $book): ?>
          <tr>
              @php $i++ @endphp
              <th> {{ $i }} </th>
              <th> {{$book->book_name}} </th>
              <th> {{$book->book_author}} </th>
              <th> {{$book->book_publisher}} </th>
              <th> {{$book->book_edition}} </th>
              <th> {{$book->book_page}} </th>
              <th> {{$book->book_language}} </th>
              <th> {{$book->book_price}} </th>

              <th>
                <a href="{{ route('edit', $book->id) }}" class="btn btn-info"> Edit </a>
              </th>
              <th>
                <form class="form-inline" action="{{ route('delete', $book->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="DELETE">
                </form>
              </th>

          </tr>
        <?php  endforeach; ?>
    </table>
    <center> {{ $books->links() }} </center>
@endsection
