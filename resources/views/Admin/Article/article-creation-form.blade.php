@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8  offset-lg-2">
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
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Article</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Article Title</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_title')}}*</div>
                    @endif
                    <input class="form-control" type="text" name="article_title" required>
                </div>
                <div class="form-group">
                    <label>Article Intro Image</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_image')}}*</div>
                    @endif
                    <div>
                        <input class="form-control" type="file" name="article_image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Article Description</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_description')}}*</div>
                    @endif
                    <textarea cols="30" rows="15" class="form-control tinymce" id="myTextArea" name="article_description"></textarea>
                </div>
                <div class="form-group">
                    <label>Tags <small>(separated with a comma)</small></label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_tag')}}*</div>
                    @endif
                    <input type="text" placeholder="Enter your tags" data-role="tagsinput" class="form-control" name="article_tag">
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Publish Article</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection