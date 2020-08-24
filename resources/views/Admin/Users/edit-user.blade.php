@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit User</h4>
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
            <form action="{{ url('admin/users/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('name')}}*</div>
                                @endif
                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('email')}}*</div>
                                @endif
                            <input class="form-control" type="email" value="{{$user->email}}" name="email">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>role <span class="text-danger">*</span></label>
                                @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('role')}}*</div>
                                @endif
                                <select name="role" id="" class="form-control">
                                    <option value="{{$user->role}}">{{$user->role}}</option>
                                    <option value="admin">admin</option>
                                    <option value="visitor">visitor</option>
                                    <option value="user">user</option>
                                    <option value="student">student</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Status</label>
                        @if(session('errors'))
                                <div class="text text-danger">{{session('errors')->first('status')}}*</div>
                                @endif
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="product_active" value="active" checked>
                            <label class="form-check-label" for="product_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="product_inactive" value="inactive">
                            <label class="form-check-label" for="product_inactive">
                            Inactive
                            </label>
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