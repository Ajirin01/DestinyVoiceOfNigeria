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
            <h4 class="page-title">Articles: {{$article_type}}</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-rounded float-right" href="{{ route('article.create') }}"><i class="fa fa-plus"></i> Add Article</a>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="article grid-article">
                    <div class="article-image" style="height: 300px">
                    <a href="{{ url('admin/article/'.$article->id.'/edit') }}"><img style="width:300xp; height: 300px" class="img-fluid" src="/storage/uploads/{{$article->article_intro_image}}" alt=""></a>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title"><a href="{{ url('admin/article/'.$article->id.'/edit') }}">{{$article->article_title}}</a></h3>
                    <p style="word-break: break-word"><?php echo substr($article->article_intro,0,50) ?>...</p>
                        <div class="article-info clearfix">
                            <div class="article-left">
                                <a class="dropdown-item" href="{{ url('admin/article/'.$article->id.'/edit') }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                <a data-toggle="modal" class="dropdown-item" data-target="#delete_department" href="{{ url('admin/article/'.$article->id.'/') }}"
                                    onclick="event.preventDefault();"><i class="fa fa-trash-o m-r-5"></i>
                                    {{ __('delete') }}
                                </a>

                                <form id="delete-form" action="{{ url('admin/article/'.$article->id.'/') }}" method="POST" style="display: none;">
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