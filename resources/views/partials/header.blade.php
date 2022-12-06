<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Immigraniada</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('immigrationPath.form') }}">Find your immigration path</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('main.about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add something else here</a>
        </li>
      </ul>
      <ul class="navbar-nav">
                @guest
                <li>
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                <li><a href=" {{ route('login') }}" class="nav-link"> login</a></li>
                @else
                <li><a href=" {{ route('logout') }}" class="nav-link">Logout</a></li>
                @endguest

        </div>

    </div>
  </div>
</nav>
  <body>
   