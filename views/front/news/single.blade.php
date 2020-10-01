@extends('front.app')
@section('title','MCCI - News')
@section('content')
 <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>News Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->


    
<!-- ##### News Area Start ##### -->
<section class="news-area section-padding-10" style="padding-top:90px;">
        <div class="container">

            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                       <div class="blog-content">
                            <span>News</span>
                            <a href="#" class="post-title">{{$new->title}}</a>
                            <div class="blog-meta">
                                <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt="">  {{$new->publisher}}</a>
                                <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt="">  {{$new->published}}</a>
                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="#"><img src="/{{$new->image}}" alt=""></a>
                        </div>
                        <p>{!!$new->descr!!}</p>
                      
                            <div class="row mb-50" style="margin-top:5px;">
                                @foreach($new->galary->Galaryimages as $image)
                                <div class="col-6 imageHolder" data-galary="{{$gallery->id}}" style="margin-top:1rem;">
                                    <div  class=" img-container ">
                                        <img src="{{$image->cdn}}" style="width:100%">
                                    </div>
                                </div>
                                @endforeach
                          </div>
                       
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

                            @for($i=1;$i<count($news);$i++)
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="/{{$news[$i]->image}}" alt="" style="height:120px;">
                                                </div>
                                                <div class="news-content">
                                                    <span>{{$news[$i]->published}}</span>
                                                    <a href="/mcci/news/single/{{$news[$i]->id}}/">{{$news[$i]->title}}</a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt=""> {{$news[$i]->publisher}}</a>
                                                        <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt="">{{substr($news[$i]->getdate()->format('F d'),0,3)}}</a>
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

@endsection