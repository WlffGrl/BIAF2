@extends('layouts.content')

@section('content')
<div class="shadow p-3 mb-5 bg-body rounded">
<section class="video">
    <div class="row text-center">
        <h2>Videos</h2>
    </div>
    <hr>
    <div class="col">
        @forelse ($embed as $item)
        <iframe width="560" height="315" src="{{$item->embed_links}}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        @empty
        <h1>No Content</h1>
        @endforelse
    </div>

</section>
</div>
@endsection
