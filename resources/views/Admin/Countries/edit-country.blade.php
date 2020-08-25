@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Country</h4>
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
            <form action="{{ url('admin/country/'.$country->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="form" class="form-group">
                    </div>
                    <div class="form-group">
                        <label>Country Name</label>
                        <input class="form-control" type="text" name="country_name" value="{{$country->country_name}}">
                    </div>
                    <div class="form-group">
                        <label>Country Code</label>
                        <input class="form-control" type="text" name="country_code" value="{{$country->country_code}}">
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