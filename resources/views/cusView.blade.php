@extends('master')

@section('content')
    <h1> Customers Details </h1>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('cuscreate') }}">Create</a></li>
      </ul>
    </div><!--/.nav-collapse -->

    <table class="table table-resposive table hover">
        <tr>
            <th> # </th>
            <th> Id </th>
            <th> Name </th>
            <th> Phone </th>
            <th> Address </th>
            <th> Book Name </th>
            <th>  </th>
            <th>  </th>
        </tr>
       @php $i = 0; @endphp
       <?php foreach ($customers as $cus): ?>
          <tr>
              @php $i++ @endphp
              <th> {{ $i }} </th>
              <th> {{ $cus->id}} </th>
              <th> {{ $cus->name }} </th>
              <th> {{ $cus->phone }} </th>
              <th> {{ $cus->address }} </th>
              <th> {{ $cus->bookName }} </th>
              <th>
                <a href="{{ route('cusedit', $cus->id) }}" class="btn btn-info"> Edit </a>
              </th>
              <th>
                <form class="form-inline" action="{{ route('cusdelete', $cus->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="DELETE">
                </form>
              </th>
          </tr>
        <?php  endforeach; ?>
    </table>
@endsection
