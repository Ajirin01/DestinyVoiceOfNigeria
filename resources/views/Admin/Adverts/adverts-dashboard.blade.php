@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Adverts</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('adverts.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Adverts</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Advert Title</th>
                                <th>Advert Descriptions</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adverts as $advert)
                                <tr>
                                <td>{{$advert->id}}</td>
                                <td>{{$advert->advert_title}}</td>
                                <td>{{$advert->advert_description}}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ url('admin/adverts/'.$advert->id.'/edit ')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a data-toggle="modal" class="dropdown-item" data-target="#delete_department" href="{{ url('admin/adverts/'.$advert->id) }}"
                                                onclick="event.preventDefault();"><i class="fa fa-trash-o m-r-5"></i>
                                                {{ __('delete') }}
                                            </a>

                                            <form id="delete-form" action="{{ url('admin/adverts/'.$advert->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$adverts->links()}}
            </div>
        </div>
    </div>
</div>
<div id="delete_department" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Advert?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger"
                    onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection