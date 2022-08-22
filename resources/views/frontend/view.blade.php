@extends('layouts.app')

@section('content')
    <div class="category-heading text-uppercase">
        <h4>{!! $post->name !!}</h4>
    </div>
    <hr>
    <div class="shadow p-3 mb-5 bg-body rounded">
        {!! $post->description !!}
    </div>
@endsection
