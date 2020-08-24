@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Course</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('error'))
                    {{session('error')}}
                    @endif
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ url('admin/courses/'.$course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Course Title</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('course_title')}}*</div>
                    @endif
                <input class="form-control" type="text" name="course_title" value="{{$course->course_title}}">
                </div>
                <div class="form-group">
                    <label>Course Image</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('course_image')}}*</div>
                    @endif
                    <input class="form-control" type="file" name="course_image">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('course_description')}}*</div>
                    @endif
                    <textarea cols="30" rows="4" class="form-control" name="course_description">{{$course->course_description}}</textarea>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection