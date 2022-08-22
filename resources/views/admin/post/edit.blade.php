@extends('layouts.master')

@section('title', 'Post')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Edit Post
                <a href="{{url('admin/posts')}}" class="btn btn-danger btn-sm float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>

            @endif

            <form action="{{url('admin/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" id="" required class="form-control form-select">
                        <option value="">-- Select Category --</option>
                       @foreach ($category as $cateitem)
                            <option value="{{$cateitem->id}}" {{$post->category_id == $cateitem->id ? 'selected':''}}>{{$cateitem->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="{{$post->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="your_summernote" rows="10" class="form-control">{!! $post->description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Link</label>
                    <input type="text" name="yt_iframe" value="{{$post->yt_iframe}}" class="form-control">
                </div>

                <h6>SEO Tag</h6>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$post->meta_title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="10" class="form-control">{!! $post->meta_description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" id="" rows="10" class="form-control">{!! $post->meta_keyword !!}</textarea>
                </div>

                <h6>Status</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input name="status" type="checkbox" class="form-control form-check-input" {{$post->status == '1' ? 'checked' : ''}}>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
