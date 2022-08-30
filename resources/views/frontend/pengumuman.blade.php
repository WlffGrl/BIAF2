@extends('layouts.content')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Pengumuman</h4>
</div>
<hr>
<div class="shadow p-3 mb-5 bg-body rounded">
    @forelse ($posts as $postitem)
    <div class="pengumuman p-3">
        <p class="fs-5">{{$postitem->name}}</p>
        <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
        <a class="btn btn-success btn-sm" href="{{asset('pengumuman/'.$postitem->slug)}}">Lihat Detail</a>
    </div>
    <div class="paginate">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
    @empty

    @endforelse
</div>
@endsection
