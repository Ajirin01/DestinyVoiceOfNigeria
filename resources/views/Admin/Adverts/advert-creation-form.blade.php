@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Advert</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('error'))
                    {{session('error')->first('advert_title')}}
                    {{session('error')->first('advert_description')}}
                    @endif
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Advert Title</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('advert_title')}}*</div>
                        @endif
                        <input class="form-control" type="text" name="advert_title">
                    </div>
                    <div class="form-group">
                        <label>Advert Image</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('advert_image')}}*</div>
                        @endif
                        <input class="form-control" type="file" name="advert_image">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        @if(session('errors'))
                        <div class="text text-danger">{{session('errors')->first('advert_description')}}*</div>
                        @endif
                        <textarea cols="30" rows="4" class="form-control" name="advert_description"></textarea>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Advert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection