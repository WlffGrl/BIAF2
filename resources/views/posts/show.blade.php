@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/posts" class="btn btn-danger mb-3"> Kembali</a>
    <h1>{{$posts->title}}</h1>
    <small>{{$posts->created_at}}</small>
    <hr>
    <div>
        {{$posts->body}}
    </div>
</div>
@endsection