@extends('layouts.app')

@section('SLIDER')
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php $i = 1; @endphp
        @foreach ($slider as $slideritem)
        <div class="carousel-item {{$i == '1' ? 'active':''}}">
            @php $i++; @endphp
            <img src="{{asset ('upload/slider/'.$slideritem->image)}}" class="d-block w-100" alt="..." >
        </div>
        @endforeach
        <div class="carousel-caption">
            <img src="img/pemkot.png" width="200" class="md-4 mb-4" alt="">
            <h1>Cimahi DigiFest</h1>
            <p>Cimahi Centre of Digital Creative Business</p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="text-center" style="">
    <!-- Grid container -->
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row justify-content-evenly">
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <img src="img/sample2.jpg" class="img-fluid" alt="">
                </div>
                <!--Grid column-->


                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <img src="img/Banner.png" class="img-fluid" alt="">
                    <div class="row justify-content-center p-4">
                        <ul class="">
                            <hr>
                            <li style="list-style-type: none">
                                <span class="title">Date</span>
                                <span class="text">21 ~ 25 October, 2022</span>
                            </li>

                            <hr>
                        </ul>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <br>
            <div class="row justify-content-evenly">
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Pengumuman</h4>
                    <hr>
                    <div class="row justify-content-evenly gy-5">
                        @forelse ($posts as $postitem)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/megaphone.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-truncate">{{$postitem->name}}</h5>
                                    <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
                                    <p class="card-text text-truncate">{{$postitem->description}}</p>
                                    <a href="{{asset('pengumuman/'.$postitem->slug)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Jadwal</h4>
                    <hr>
                    <div class="row justify-content-evenly gy-5">
                        @forelse ($jadwal as $item)
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/Calender.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title text-truncate">{{$item->title}}</h5>
                                <p class="fs-6"><i class="fa fa-calendar"></i>{{$item->created_at->format('d-m-Y')}}</p>
                                <p class="card-text text-truncate">{{$item->description}}</p>
                                <a href="{{asset('jadwal/'.$item->slug)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <br>
            <div class="row justify-content-evenly">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 p-4 shadow bg-body rounded ">
                    <h4>Lokasi</h4>
                    <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.2904012294825!2d107.55439146742441!3d-6.87123118118475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88c72af4732ac236!2sDPMPTSP%20Kota%20Cimahi!5e0!3m2!1sen!2sid!4v1672136152226!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </section>
</div>
{{--
    <div class="iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.2904012294825!2d107.55439146742441!3d-6.87123118118475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88c72af4732ac236!2sDPMPTSP%20Kota%20Cimahi!5e0!3m2!1sen!2sid!4v1672136152226!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
--}}
@endsection
