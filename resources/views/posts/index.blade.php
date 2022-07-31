@extends('layout.app')

@section('content')
<div class="container">
    <h1>Pengumuman</h1>
    <hr>
    @if (count($posts) > 0)
    @foreach ($posts as $post)
    <div class="card mb-4 p-3">
        <div class="card-body">
            <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
            <p class="card-text">{{$post->created_at}}</p>
        </div>
    </div>
    @endforeach
</div>
@else
<p>No posts found</p>
@endif
@endsection