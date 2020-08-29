@extends('layouts.site.main_layout')
@section('upper-content')
{{-- <h1>{{$title}}</h1> --}}
<h3 class="text-center">MEET NIGERIAN ACHIEVERS AT HOME</h3>
<p>
    In line with our objective of elevating the image of Nigeria and Nigerians across the
    globe, we bring you a series of rare interviews with ardent lovers of Nigeria.
</p>
<p>
    For a starter, we present a much privileged Lady who cannot imagine living outside
    Nigeria, even when blessed with such opportunities. She is a very simple, achieving
    and still aspiring Nigerian Lady, who has great hopes for her mother land.
</p>
<p>
    <h5>Meet Mrs. Mojisola Okonkwo ……</h5>
</p>
@endsection

@section('lower-content')
@if ($lower)
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <br>
                    <h3 class="text-center">“….There is Great Hope for Nigeria ….”</h3>
                    <div class="blog-posts-area">

                        {{-- <div class="pager d-flex align-items-center justify-content-between">
                            <div class="prev">
                                <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                            </div>
                            <div class="next">
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div> --}}

                        <div class="section-heading">
                            <h6>Interview</h6>
                        </div>

                        <div class="row">
                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{asset('site/img/bg-img/Moj 4.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>BACKGROUND INFORMATION:</h6>
                                        </a>
                                       <h6 class="text-left">May we know you?</h6>
                                       <p class="text-left">
                                        <strong>My names are:</strong> Mrs. Mojisola Elizabeth
                                        Okonkwo. Nee Ajibola
                                       </p>

                                       <h6 class="text-left">Where were you born?</h6>
                                       <p class="text-left">
                                        I was born at Anuolu Hospital, Ede, formerly Oyo State, but now in Osun State
                                       </p>

                                       <h6 class="text-left">Was this also where you grew up?</h6>
                                       <p class="text-left">
                                        I grew up in Lagos and partly in Ile – Ife, Osun State, in my teenage years.
                                       </p>

                                       <h6 class="text-left">What was growing up like for you?</h6>
                                       <p class="text-left">
                                        My growing up was very tough. Moving to
                                        Lagos was influenced by the death of my Dad in
                                        1973. I was sent to stay with a relation, who
                                        practically turned me into a house-girl (maid),
                                        causing me to suffer much hardship.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h5 class="title">3 Comments</h5>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('site/img/bg-img/30.jpg')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="{{asset('site/img/bg-img/31.jpg')}}" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Sandy Doe</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('site/img/bg-img/32.jpg')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/19.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/20.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/21.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/22.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/23.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('site/img/bg-img/24.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
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
                                <a href="#">
                                    <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
    @endif
@endsection