<!DoCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('tittle', 'WEBService 23')</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    </head>

    <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('guru.index')}}">Guru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('matapelajaran.index')}}">Mata Pelajaran</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pengampu.index')}}">Pengampu</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
        <div class="container">
            @yield('isi')
    </body>
</html>

