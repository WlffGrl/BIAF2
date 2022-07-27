@extends('layout.app')

@section('content')
<div class="row p-3">
    <div class="col text-center">
        <h3>
            Content
        </h3>
    </div>
</div>
<div class="row justify-content-evenly p-5">
    <div class="col-4">
        <img src="img/sample2.jpg" class="img-fluid" alt="sample1">
    </div>
    <div class="col-3">
        <img src="img/slogan_2022.jpg" class="img-fluid" alt="sample1"><br><br>
        <ul class="text border-top border-bottom">
            <li>
                <span class="title">Date</span>
                <span class="text">21 ~ 25 October, 2022</span>
            </li>
        </ul>
    </div>
</div>
@endsection