@extends('layouts.master')
@section('title', 'Posts')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Posts
                <a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>Category</th>
                    <th>Post Name</th>
                    <th>state</th>
                </thead>
                <tbody>
                    @foreach ($post as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status == '1' ? 'Hidden': 'Visible'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
