<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-expand-md">
    <img src="img/logo2020.png" alt="">
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">BIAF</a></li>
            <li class="nav-item"><a href="posts" class="nav-link">PENGUMUMAN</a></li>
            <li class="nav-item"><a href="/jadwal" class="nav-link">JADWAL</a></li>
            <li class="nav-item"><a href="/pengukuran" class="nav-link">INDEX PENGUKURAN</a></li>
            <li class="nav-item"><a href="/investasi" class="nav-link">PLATFORM INVESTASI</a></li>
            @php
                $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get();
            @endphp
            @foreach ($categories as $cateitem)
            <li class="nav-item">
                <a href="{{$cateitem->slug}}" class="nav-link">{{$cateitem->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>
<!-- End Navbar -->
