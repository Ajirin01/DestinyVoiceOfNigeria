@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
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
                <h4 class="page-title">Edit Post</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ url('admin/blog/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Post Title</label>
                        <input class="form-control" type="text" name="post_title" value="{{$post->blog_title}}">
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <div>
                            <input class="form-control" type="file" name="post_image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <textarea cols="30" rows="15" class="form-control tinymce" name="post_description" >{{$post->blog_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Tags <small>(separated with a comma)</small></label>
                        <input type="text" placeholder="Enter your tags" data-role="tagsinput" class="form-control" name="post_tag" value="{{$post->blog_tag}}">
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