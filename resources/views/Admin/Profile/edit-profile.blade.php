@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Profile</h4>
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
            <form action="{{ url('admin/profile/'.$profile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Role<span class="text-danger">*</span></label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('role')}}*</div>
                            @endif
                            <select name="role" id="" class="form-control">
                                <option value="{{$profile->role}}">{{$profile->role}}</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                                <option value="visitor">visitor</option>
                                <option value="student">student</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span></label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('first_name')}}*</div>
                            @endif
                            <input class="form-control" type="text" name="first_name" value="{{$profile->first_name}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('last_name')}}*</div>
                            @endif
                            <input class="form-control" type="text" name="last_name" value="{{$profile->last_name}}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('DOB')}}*</div>
                            @endif
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" name="DOB" value="{{$profile->DOB}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Account Expiration day</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('expires_at')}}*</div>
                            @endif
                            <div class="cal-icon">
                                <input type="text" class="form-control" name="expires_at" placeholder="i.e in how many days does the account expire? e.g 30">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    @if(session('errors'))
                                    <div class="text text-danger">{{session('errors')->first('address')}}*</div>
                                    @endif
                                    <input type="text" class="form-control " name="address" value="{{$profile->address}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone </label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('phone')}}*</div>
                            @endif
                            <input class="form-control" type="phone" name="phone" value="{{$profile->phone}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Avatar</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('profile_photo')}}*</div>
                            @endif
                            <div class="profile-upload">
                                <div class="upload-img">
                                    <img alt="" src="{{ asset('admin/assets/img/user.jpg') }}">
                                </div>
                                <div class="upload-input">
                                    <input type="file" class="form-control" name="profile_photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group gender-select">
                            <label class="gen-label">Gender:</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('gender')}}*</div>
                            @endif
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="male">Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="female">Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="display-block">Status</label>
                            @if(session('errors'))
                            <div class="text text-danger">{{session('errors')->first('status')}}*</div>
                            @endif
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="doctor_active" value="active">
                                <label class="form-check-label" for="doctor_active">
                                Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="inactive">
                                <label class="form-check-label" for="doctor_inactive">
                                Inactive
                                </label>
                            </div>
                        </div>
                    </div>
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