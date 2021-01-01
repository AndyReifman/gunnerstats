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
        <ul class="menu">
          <a href="/" class="menu-text">Gunnerstats</a>
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