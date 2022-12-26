<!-- Navbar -->
<nav class="navbar navbar-dark" style="background-color:rgb(23, 35, 199)">
    <div class="container-fluid p-4">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/LogoDigifest.png')}}" alt="" width="400" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
<nav id="menu" class="navbar navbar-dark bg-primary navbar-expand-md">
    <img src="" alt="">
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{Request::is('/') ? 'active' : ''}}">BERANDA</a></li>
            <li class="nav-item"><a href="{{url('pengumuman')}}" class="nav-link {{Request::is('pengumuman') ? 'active' : ''}}">PENGUMUMAN</a></li>
            <li class="nav-item"><a href="{{url('jadwal')}}" class="nav-link {{Request::is('jadwal') ? 'active' : ''}}">JADWAL</a></li>
            <li class="nav-item"><a href="{{url('pengukuran')}}" class="nav-link {{Request::is('pengukuran') ? 'active' : ''}}">INDEX PENGUKURAN</a></li>
            <li class="nav-item"><a href="{{url('investasi')}}" class="nav-link {{Request::is('investasi') ? 'active' : ''}}">PLATFORM INVESTASI</a></li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
