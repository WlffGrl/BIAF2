@extends('layouts.content')

@section('content')
<div class="text-center" style="">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <h5>Link</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="https://docs.google.com/spreadsheets/d/1LshpA8qG-YFl9rsbk06qyKQ9A7LsdAnoKQDsyMVdsz8/edit?usp=sharing"
                                class="text-dark">Metodologi dan Jadwal BIAF 2022</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                    <img src="{{asset('img/graf.jpeg')}}" class="img-fluid" alt="">
                </div>
                </div>
            </div>
</div>
@endsection
