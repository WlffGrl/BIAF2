@extends('layouts.app')

@section('content')
    <div class="category-heading text-uppercase">
        <h4>{{$category->name}}</h4>
    </div>
    <hr>
    <div class="shadow p-3 mb-5 bg-body rounded">
        @forelse ($post as $postitem)
        <div class="pengumuman p-3">
            <p class="fs-5">{{$postitem->name}}</p>
            <p class="fs-6"><i class="fa fa-calendar"></i>{{$postitem->created_at->format('d-m-Y')}}</p>
            <a class="btn btn-success btn-sm" href="{{url($category->slug.'/'. $postitem->slug)}}">Lihat Detail</a>
        </div>
        <div class="paginate">
            {{ $post->links('pagination::bootstrap-4') }}
        </div>
        @empty

        @endforelse
    </div>

    <!--
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex
                        numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus
                        at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates
                        quos eligendi labore.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex
                        numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
            </div>
        </div>
    </div> -->
    @endsection
