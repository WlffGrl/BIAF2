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
                    <img src="img/slogan_2022.jpg" class="img-fluid" alt="">
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
        </section>
</div>

@endsection
