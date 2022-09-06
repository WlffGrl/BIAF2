@extends('layouts.content')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Jadwal</h4>
</div>
<hr>
<div class="shadow p-3 mb-5 bg-body rounded">
    <ol class="list-group list-group-flush list-group-numbered">
    @forelse ($jadwal as $item)
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><a href="{{asset('jadwal/'.$item->slug)}}" class="text-dark">{{$item->title}}</a></div>
        </div>
        <span class="badge text-dark">{{$item->created_at->format('d-m-Y')}}</span>
      </li>
    @empty

    @endforelse
    </ol>
</div>
<div class="paginate">
    {{ $jadwal->links('pagination::bootstrap-4') }}
</div>
@endsection
