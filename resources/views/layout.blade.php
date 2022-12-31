<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact-us">Contact Us</a>
              </li>
              @if (session()->has('user'))
              <li class="nav-item">
                <a class="nav-link" href="/logout">Log Out</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/sign-up">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route ('login')}}">Log In</a>
            </li>
            @endif
        </div>
      
      </nav>

    <!-- A grey horizontal navbar that becomes vertical on small screens -->
      @yield('content')
</body>
</html>