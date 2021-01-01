<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Welcome to Gunnerstats</title>
  <!-- jQuery from Google -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="/" class="navbar-brand">Gunnerstats</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="{{ Request::path() === '/' ? 'active' : ''}}" href="/"
              {{ Request::path() === '/' ? 'aria-current=page' : ''}}>Home</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>