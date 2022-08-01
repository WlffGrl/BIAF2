@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
            <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Slider
                        <a href="{{url('crud-slider')}}" class="btn btn-danger ">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" value="{{$slider->heading}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control">{{$slider->description}}"</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" value="{{$slider->link}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Link Name</label>
                            <input type="text" name="link_name" value="{{$slider->link_name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Slider Image Upload</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{asset('upload/slider/'. $slider->image)}}" width="100px" alt="Slider Image">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked':''}}>
                            0-visible, 1-hidden
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection