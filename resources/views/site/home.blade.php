@extends('layouts.site.main_layout')

@section('upper-content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12 col-lg-5">
            <!-- Single Featured Post -->
            <h1 class="text-center">
                WELCOME
            </h1>
            <div>
                <h5 style="line-height: 1.5">
                    Welcome to Destiny Nigeria’s
                    Voice Magazine, “the
                    authentic global voice for
                    Nigeria”.
                </h5>
                <h5 style="line-height: 1.5">
                    We provide the foremost
                    platform you can rely on to
                    obtain valuable information
                    about Nigeria as a nation, her
                    people and her vast natural
                    resources.
                </h5>
                <a href="/about"><h4 class="text-center" style="font-size:0.8rem">… Read more About Us …</h4></a>
            </div>

        </div>
        <div class="col-12 col-lg-7">
            <!-- Single Featured Post -->
            <div class="single-blog-post featured-post">
                
                <div class="post-thumb">
                    <a href="#"><img src="{{asset('site/img/bg-img/Moj 1.jpg')}}" alt=""></a>
                </div>
                <div class="post-data">
                    <h4>There is Great Hope for Nigeria</h4>
                    <div class="post-meta">
                        <p class="post-author">
                            <a class="text-danger" href="#">
                                … Read Interview With Mrs Moji Okonkwo…
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('lower-content')
<div class="popular-news-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading">
                    <h6 class="rect-box-headline">Popular Updates</h6>
                </div>

                <div class="row">
                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <h5 class="text-center">
                                LOVE FROM DIASPORA …
                            </h5>
                            <br>
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('site/img/bg-img/akeem usa.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-data">
                                <br><br>
                                <h4>MEET AKEEM:</h4>
                                <h6>“…. Nigerians have the brains…”</h6>
                                <p class="text-left">
                                    Due to high security nature of his job, Destiny Nigeria’s
                                    Voice could not publish an exclusive interview with
                                    another ardent lover of Nigeria, based in far away
                                    United States of America.
                                </p>
                                <p class="text-left">
                                    We however have the rare privilege of presenting a
                                    summary of the story of the man who simply prefers to
                                    be called: “Akeem”.
                                </p>
                                
                                <p class="post-author">
                                    <a class="text-danger" href="#">
                                        … Read Akeem’s Story here…
                                    </a>
                                </p>
                                <div class="align-items-center">
                                    <a href="#" class="post-like"><img src="{{asset('site/img/core-img/like.png')}}" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="{{asset('site/img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('site/img/bg-img/happy 60years.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-data">
                                <h4> HAPPY 6O YEARS OF INDEPENDENCE TO NIGERIA </h4>
                                <h4> 1st October 1960 to 1st October 2020 </h4>
                                <h6> EDITORIAL: Nigeria at 60; What Next?</h6>
                                <p class="post-author">
                                    <a class="text-danger" href="#">
                                        .… Read Article here …
                                    </a>
                                </p>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="{{asset('site/img/core-img/like.png')}}" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="{{asset('site/img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="section-heading">
                    <h6 class="rect-box-headline">Info</h6>
                </div>
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>4 Most Recent Updates</h3>

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
                <div class="newsletter-widget">
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

<!-- ##### Video Post Area Start ##### -->
{{-- <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg); transform: scaleY(.5)"> --}}
<div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                {{-- <div class="single-video-post" style="transform: scaleX(.7); transform: scaleY()"> --}}
                <div class="single-video-post">
                    <img src="{{asset('site/img/bg-img/aunty shade advert.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Video Post Area End ##### -->
@endsection