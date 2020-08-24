@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-7 col-6">
            <h4 class="page-title">Admin Profile </h4>
            
            </div>

            <div class="col-sm-5 col-6 text-right m-b-30">
                <a href="{{ url('admin/profile/'.$profile->id.'/edit ') }}" class="btn btn-primary btn-rounded"><i class="fa fa-pencil"></i> Edit Profile</a>
            </div>
        </div>
        <div class="card-box profile-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                            <a href="#"><img class="avatar" src="/storage/upload/{{$profile->profile_photo}}" alt=""></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{$profile->first_name}} {{$profile->last_name}}</h3>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info" style="font-size: 1rem">
                                        
                                        <li>
                                            <span class="title">Phone:</span>
                                            <span class="text"><a href="#">{{$profile->phone}}</a></span>
                                        </li>
                                        <li>
                                            <span class="title">Email:</span>
                                            <span class="text"><a href="#">{{$user->email}}</a></span>
                                        </li>
                                        
                                        <li>
                                            <span class="title">Address:</span>
                                            <span class="text">{{$profile->address}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Gender:</span>
                                            <span class="text">{{$profile->gender}}</span>
                                        </li>
                                        <li style="height: 10px">
                                            <span  class="title">Status</span>
                                        <span class="text">{{$profile->status}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection