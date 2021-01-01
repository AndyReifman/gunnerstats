<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Welcome to Gunnerstats</title>
  <!-- jQuery from Google -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- Google Material Design Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <script>
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo center">Gunnerstats</a>
      <ul class="left hide-on-med-and-down">
        <li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/">Home</a>
        </li>
        <li class="{{ Request::path() === 'about' ? 'active' : ''}}">
          <a href="/about">About</a>
        </li>
        <li class="{{ Request::path() === 'contact' ? 'active' : ''}}">
          <a href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('content')
  <footer>
    <div class="footer-copyright">
      <div class="container">
        Copyright &copy; 2020
      </div>
    </div>
  </footer>
</body>

</html>
