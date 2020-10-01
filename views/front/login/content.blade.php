@extends('front.app')
@section('title','propeace - Private')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax"
    style="background-image: url(/assets/front/img/bg-img/6.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Private Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Private</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### single event Area Start ##### -->
<section class="news-area section-padding-10" style="padding-top:90px;">
    <div class="container">

        <div class="row">
            <!-- Single News Area -->
            <div class="col-12 col-lg-8">

                <!-- Single Blog Area -->
                @foreach($infos as $info)
                <div class="feature-wrapper mb-30">
                    <div class="feature-title-heading ">

                        <h3><a class="">{{$info->title}}</a></h3>
                    </div>
                    <div class="feature-text">
                        <p>{!!$info->descr!!}</p>
                    </div>
                    <div style="padding:.7rem 0;">
                        <a class="text-warning pull-left" style="color: #f80!important; font-size:13px;"><i
                                class="fa fa-calendar-plus-o" aria-hidden="true"></i> - {{$info->date}}</a>
                        <a href="/{{$info->files}}" class="text-info pull-right"
                            style="color: #f80!important; font-size:13px;"><i class="fa fa-cloud-download"
                                aria-hidden="true"></i> - Download File</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- Single Sidebar Widget -->
                    <div class="single-widget-area cata-widget">
                        <div class="widget-heading">
                            <div class="line"></div>
                            <h4>Usefull Link</h4>
                        </div>

                        <ul>
                            <li><a href="/propeace/pastpresident/">Past President</a></li>
                            <li><a href="/propeace/secretariat/">secretariat</a></li>
                            <li><a href="/propeace/committee/">Our Committee</a></li>
                            <li><a href="/propeace/boardmember/">Executive Board Member</a></li>
                            <li><a href="/propeace/gallery/list/">Our Gallery</a></li>
                            <li><a href="/propeace/about/">About Us</a></li>
                            <li><a href="/propeace/contact/">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- side bar end -->
        </div>
    </div>
</section>

@endsection