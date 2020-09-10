@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
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
                <h4 class="page-title">Articles</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-rounded float-right" href="{{ route('blog.create') }}"><i class="fa fa-plus"></i> Add Article</a>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image" style="height: 300px">
                    <a href="{{ url('admin/blog/'.$article->id.'/edit') }}"><img class="img-fluid" src="/storage/uploads/{{$article->blog_image}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ url('admin/blog/'.$article->id.'/edit') }}">{{$article->blog_title}}</a></h3>
                    <p style="word-break: break-word"><?php echo substr($article->blog_description,0,50) ?>...</p>
                        {{-- <a href="{{ url('admin/blog/1/edit') }}" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a> --}}
                        <div class="blog-info clearfix">
                            <div class="article-left">
                                <a class="dropdown-item" href="{{ url('admin/blog/'.$article->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-toggle="modal" class="dropdown-item" data-target="#delete_department" href="{{ url('admin/blog/'.$article->id.'/') }}"
                                    onclick="event.preventDefault();"><i class="fa fa-trash-o m-r-5"></i>
                                    {{ __('delete') }}
                                </a>

                                <form id="delete-form" action="{{ url('admin/blog/'.$article->id.'/') }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>{{ $articles->links() }}</div>
    </div>
</div>

<div id="delete_department" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Appointment?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger"
                    onclick="
                    document.getElementById('delete-form').submit();"
                    >Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection