<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/login.css" />
        <link rel="stylesheet" href="./css/bootstrap.css" />

    </head>
    <body class="antialiased">
    
        <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #eee;">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Medication</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="btn btn-outline-success  mx-1" aria-current="page" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-success  mx-1" aria-current="page" href="/board">Control Board</a>
                  </li>
                 
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <br>
          @yield('navbar')
          @yield('signup')
          @yield('login')
          @yield('board')


        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
