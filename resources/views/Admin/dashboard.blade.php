@extends('layouts.admin_base')

@section('content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-group" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                                {{-- <h3>{{$users_number}}</h3> --}}
                                <h3>12</h3>
								<span class="widget-title1">Users <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-book"></i></span>
                            <div class="dash-widget-info text-right">
                                {{-- <h3>{{$post_number}}</h3> --}}
                                <h3>12</h3>
                                <span class="widget-title2">Posts <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                {{-- <h3>{{$courses_number}}</h3> --}}
                                <h3>12</h3>
                                <span class="widget-title3">Courses <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-hourglass" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                {{-- <h3>{{$pending_students_number}}</h3> --}}
                                <h3>12</h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
                                <h4 class="card-title d-inline-block">Upcoming Appointments</h4>
                                 {{-- <a href="{{ route('appointments.index') }}" class="btn btn-primary float-right">View all</a> --}}
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											<tr>
												<th>Client Name</th>
												<th>Client ID</th>
												<th>Timing</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                            {{-- @foreach ($profiles as $profile)
                                                @foreach ($profile->appointments as $appointment)
                                                <tr>
                                                    <td style="min-width: 200px;">
                                                        <a class="avatar" href="{{ route('profile.index') }}"><i class="fa fa-user"></i></a>
                                                        <h2><a href="{{ route('profile.index') }}">{{$profile->first_name}} {{$profile->last_name}}<span>{{$profile->address}}</span></a></h2>
                                                    </td>                 
                                                    <td>
                                                        <h5 class="time-title p-0">Client ID</h5>
                                                        <p class="text text-center">{{$profile->id}}</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="time-title p-0">Timing</h5>
                                                        <p>{{$appointment->appointment_time}}</p>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('appointments.index') }}" class="btn btn-outline-primary take-btn">Take up</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endforeach --}}
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Students</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    {{-- @foreach ($students as $student)
                                        <li>
                                            <div class="contact-cont">
                                                <div class="float-left user-img m-r-10">
                                                    @if ($student->status == 'active')
                                                    <a href="{{ url('admin/students/'.$student->id) }}" title="{{$student->first_name}} {{$student->last_name}}"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                                    @else
                                                    <a href="{{ url('admin/students/'.$student->id) }}" title="{{$student->first_name}} {{$student->last_name}}"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                                    @endif
                                                </div>
                                                <div class="contact-info">
                                                    <span class="contact-name text-ellipsis">{{$student->first_name}} {{$student->last_name}}</span>
                                                    <span class="contact-date">{{$student->status}}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach --}}
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                {{-- <a href="{{ route('students.index') }}" class="text-muted">View all Students</a> --}}
                            </div>
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								{{-- <h4 class="card-title d-inline-block">New Users </h4> <a href="{{ route('users.index') }}" class="btn btn-primary float-right">View all</a> --}}
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                            {{-- @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <img width="28" height="28" class="rounded-circle" src="assets/img/user.jpg" alt=""> 
                                                        <h2>{{$user->name}}</h2>
                                                    </td>
                                                    <td class="text text-left">{{$user->email}}</td>
                                                </tr>
                                            @endforeach --}}
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            
@endsection