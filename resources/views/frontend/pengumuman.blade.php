@extends('layouts.content')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Pengumuman</h4>
</div>
<hr>
<div class="shadow p-3 mb-5 bg-body rounded">
    <ol class="list-group list-group-flush list-group-numbered">
    @forelse ($posts as $postitem)
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><a href="{{asset('pengumuman/'.$postitem->slug)}}" class="text-dark">{{$postitem->name}}</a></div>
        </div>
        <span class="badge text-dark">{{$postitem->created_at->format('d-m-Y')}}</span>
      </li>
    @empty

    @endforelse
    </ol>
</div>
<div class="paginate">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>
{{--
    <a href="{{asset('pengumuman/'.$postitem->slug)}}" class="text-dark">{{$postitem->name}}</a>
    <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
--}}
@endsection
