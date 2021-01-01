<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Welcome to Gunnerstats</title>
  <!-- jQuery from Google -->
  <!-- Compressed CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css"
    integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

  <!-- Compressed JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
    integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

  <script>
    $(document).foundation();
  </script>

</head>

<body>
  <nav>
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <a href="/" class="menu-text">Gunnerstats</a>
          <li>
            <a class="{{ Request::path() === '/' ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{ Request::path() === 'about' ? 'active' : ''}}" href="/about"
              {{ Request::path() === 'about' ? 'aria-current=page' : ''}}>About</a></li>
          <li class="nav-item">
            <a class="{{ Request::path() === 'contact' ? 'active' : ''}}" href="/contact"
              {{Request::path() === 'contact' ? 'aria-current=page' : ''}}>Contact</a>
          </li>
        </ul>
      </div>
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