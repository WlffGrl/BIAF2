@extends('layouts.app')


@section('content')
<h1>create post</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{form::label('title', 'title')}}
    {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{form::label('body', 'body')}}
    {{form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body
    Text'])}}
</div>
{{form::submit('submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection