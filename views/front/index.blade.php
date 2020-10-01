@extends('front.app')
@section('title','mechicci.org.np')
@section('content')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/assets/front/img/mcci.jpeg);">
            </div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms"></h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms"> Pro Peace<span> Nepal</span> /h2>

                                <!-- <a href="#" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Discover</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>





        <!-- Single Slide -->

    </div>
    <!-- ##### Hero Area End ##### -->



    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-10" style="padding-top:90px;">
        <div class="container">

            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-40">
                        <div class="blog-content">
                            <span>Latest News</span>
                            <a href="/mcci/news/single/{{$news[0]->id}}/" class="post-title">{{$news[0]->title}}</a>
                            <div class="blog-meta">
                                <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt="">
                                    {{$news[0]->publisher}}</a>
                                <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt="">
                                    {{$news[0]->published}}</a>
                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="/mcci/news/single/{{$news[0]->id}}/"><img src="/{{$news[0]->image}}" alt=""></a>
                        </div>
                        <p>{!!substr($news[0]->descr,0,570)!!}....</p>
                    </div>
                </div>
                <!-- Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area tabs-widget">
                            <div class="widget-heading">
                                <div class="line"></div>
                                <h4>Latest News</h4>
                                Related News
                            </div>

                            @for($i=1;$i<count($news);$i++) <!-- Single News Area -->
                                <div class="single-news-area d-flex align-items-center">
                                    <div class="news-thumbnail">
                                        <img src="/{{$news[$i]->image}}" alt="" style="height:120px;">
                                    </div>
                                    <div class="news-content">
                                        <span>{{$news[$i]->published}}</span>
                                        <a href="/mcci/news/single/{{$news[$i]->id}}/">{{$news[$i]->title}}</a>
                                        <div class="news-meta">
                                            <a href="#" class="post-author"><img
                                                    src="/assets/front/img/core-img/pencil.png" alt="">
                                                {{$news[$i]->publisher}}</a>
                                            <a href="#" class="post-date"><img
                                                    src="/assets/front/img/core-img/calendar.png"
                                                    alt="">{{substr($news[$i]->getdate()->format('d F'),0,6)}}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single News Area -->
                                @endfor
                        </div>
                    </div>
                </div>
                <!-- side bar end -->
            </div>
        </div>
    </section>






    <!-- ##### event and notice Area Start ##### -->
    <section class="news-area bg-gray section-padding-10" style="padding-top:80px;">
        <div class="container">

            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-7">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                        <div class="blog-content">
                            <span>Comming Events</span>
                            <a href="/mcci/event/single/{{$event->id}}/" class="post-title">{{$event->title}}</a>
                            <div class="blog-meta">
                                <a href="#" class="post-date">Date:- {{$event->eventdate}}</a> |
                                <a href="#" class="post-author">Time:- {{$event->eventtime}}</a>
                                <a href="#" class="post-date">Vanue:- {{$event->address}}</a>

                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="/mcci/event/single/{{$event->id}}/"><img src="/{{$event->image}}" alt=""></a>
                        </div>
                        <p>{!!substr($event->descr,0,570)!!}....</p>
                    </div>
                </div>
                <!-- Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-5 ">
                    <div class="sidebar-area ">

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area tabs-widget">
                            <div class="widget-heading">
                                <div class="line"></div>
                                <h4>Recent Notices</h4>
                                To be alert
                            </div>
                            @foreach($notices as $notice)
                            <div class="feature-wrapper mb-30">
                                <div class="feature-title-heading ">
                                    <h3><a href="/mcci/notice/single/{{$notice->id}}/" class="">{{$notice->title}}</a>
                                    </h3>
                                    <span></span>
                                </div>
                                <div class="feature-text">
                                    <p>{!!substr($notice->desc,0,150)!!}...</p>
                                </div>
                                <div style="padding:.7rem 0;">
                                    <small class="text-warning pull-left" style="color: #f80!important;"><i
                                            class="fa fa-calendar-plus-o" aria-hidden="true"></i> -
                                        {{$notice->published}}</small>
                                    <small class="text-info pull-right" style="color: #f80!important;"><i
                                            class="fa fa-user-circle" aria-hidden="true"></i> -
                                        {{$notice->publisher}}</small>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <!-- side bar end -->
            </div>
        </div>
    </section>

    @endsection