@extends('layouts.site.main_layout')
@section('upper-content')
    <h3 class="text-center">{{$title}}</h3>
    @if ($upper)
        <div class="col-12">
            <div class="single-blog-post featured-post col-12">
                <a href="{{URL::to('articles/nigerians-at-home-achievers/'.$articles[0]->id)}}"><img style="width: 100%; height: 500px" src="/storage/uploads/{{$articles[0]->article_intro_image}}" alt=""></a>
                <div class="post-data">
                    <a href="{{URL::to('articles/nigerians-at-home-achievers/'.$articles[0]->id)}}" class="post-title">
                        <h6>{{$articles[0]->article_title}}</h6> 
                    </a>
                    <div class="post-meta">
                        <div class="d-flex align-items-center">
                            <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-like"><img src="{{asset('site/img/core-img/like.png')}}" alt=""> <span>392</span></a>
                            <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-comment"><img src="{{asset('site/img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($error)
        <h1>Error</h1>
    @endif
        
    </div>
</div>
@endsection

@section('lower-content')
@if ($lower)
        <!-- ##### Blog Area Start ##### -->
    <div style="margin-top: 30px" class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        @foreach ($articles as $key => $article)
                            @if ($key > 0)
                                <div class="single-blog-post featured-post mb-30">
                                    <div >
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/'.$article->id)}}"><img style=" width: 100%; height: 500px" src="/storage/uploads/{{$article->article_intro_image}}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>{{$article->article_title}}……</h6>
                                        </a>
                                        <div class="post-meta">
                                            <div class="d-flex align-items-center">
                                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-like"><img src="{{asset('site/img/core-img/like.png')}}" alt=""> <span>392</span></a>
                                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-comment"><img src="{{asset('site/img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            @endif
                           
                        @endforeach
                        

                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <li class="page-item active"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">1</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">2</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">3</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">4</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">5</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">...</a></li>
                            <li class="page-item"><a class="page-link" href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">10</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/19.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/20.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/21.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/22.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/23.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}"><img src="{{asset('site/img/bg-img/24.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>4 Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">
                                    <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">
                                    <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">
                                    <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">
                                    <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="{{URL::to('articles/nigerians-at-home-achievers/1')}}" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="{{asset('site/img/bg-img/29.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="{{asset('site/img/bg-img/30.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="{{asset('site/img/bg-img/31.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="{{asset('site/img/bg-img/32.jpg')}}" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="{{URL::to('articles/nigerians-at-home-achievers/1')}}">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
    @endif
@endsection