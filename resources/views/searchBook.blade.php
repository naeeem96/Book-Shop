@extends('master')

@section('content')
    <h2> Search Details </h2>
    <div class="container">
      <table class="table table-resposive table hover">
          {{ csrf_field() }}
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
                 <th> {{$book->book_page}} </th>
                 <th> {{$book->book_edition}} </th>
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
    </div>
    

@endsection
