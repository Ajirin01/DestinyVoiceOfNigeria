@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-9  offset-lg-1">
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
            <div class="col-lg-9 offset-lg-1">
                <h4 class="page-title">Add Article</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 offset-lg-1">
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Article Title</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_title')}}*</div>
                    @endif
                    <select name="article_type" class="form-control" id="">
                        <option value="">Please select the article type to create</option>
                        <option value="nigerians-at-home-achievers">Nigerians at Home Achievers</option>
                        <option value="nigerians-in-diaspora-achievers">Nigerians in Diaspora Achievers</option>
                        <option value="nigerians_at_home_achievers">Notable Profiles</option>
                        <option value="nigerians_at_home_achievers">Regional Updates</option>
                        <option value="nigerians_at_home_achievers">Disapora Updates</option>
                        <option value="nigerians_at_home_achievers">Global Updates</option>
                        <option value="nigerians_at_home_achievers">Tribes & Culture</option>
                        <option value="nigerians_at_home_achievers">Agriculture</option>
                        <option value="nigerians_at_home_achievers">Mineral Resources</option>
                        <option value="nigerians_at_home_achievers">Tourism</option>
                        {{-- <option value="nigerians_at_home_achievers">nigerians at home achievers</option>
                        <option value="nigerians_at_home_achievers">nigerians at home achievers</option>
                        <option value="nigerians_at_home_achievers">nigerians at home achievers</option>
                        <option value="nigerians_at_home_achievers">nigerians at home achievers</option> --}}
                    </select>
                </div>
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
                        <input class="form-control" type="file" name="article_intro_image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Article Introduction</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_description')}}*</div>
                    @endif
                    <textarea cols="30" rows="10" class="form-control" id="intro" name="article_intro"></textarea>
                </div>
                <div class="form-group">
                    <label>Article Description</label>
                    @if(session('errors'))
                    <div class="text text-danger">{{session('errors')->first('article_description')}}*</div>
                    @endif
                    <textarea cols="30" rows="15" class="form-control" id="myTextArea" name="article_description"></textarea>
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