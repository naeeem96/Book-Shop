<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Shop</title>
    <link rel="stylesheet" href = "{{asset('bootstrap/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href = "{{asset('css/parsleyStyle.css')}}" >
  </head>
  <body>
      <!-- Static navbar -->
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home')}}">Book Shop</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar">
              @if(Auth::check())
                <li><a href="{{ route('home') }}">Dashboard</a></li>
              @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              @endif
            </ul>
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('index') }}">Books</a></li>
              <li class="active"><a href="{{ route('cusview') }}">Customer</a></li>
              <li class="active"><a href="{{ route('details') }}">Details</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div class="container">
          @yield('content')
      </div>

      <script type = "text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type = "text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
      <script type = "text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>


  </body>

</html>
