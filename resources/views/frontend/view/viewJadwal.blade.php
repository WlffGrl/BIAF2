@extends('layouts.content')

@section('content')
    <div class="category-heading text-uppercase">
        <h4>{!! $jadwal->title !!}</h4>
    </div>
    <hr>
    <div class="shadow p-3 mb-5 bg-body rounded">
        {!! $jadwal->description !!}
    </div>
@endsection
