@extends('front.app')
@section('title','propeace - Secretariat')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax"
    style="background-image: url(/assets/front/img/bg-img/6.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Secretariat</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Secretariat</li>
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
                @foreach($secretaries as $secretary)
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <img src="/{{$secretary->image}}" alt="" style="height:150px; width:170;float:">
                    </div>

                    <div class="col-12 col-lg-9">
                        <div style="line-hight:10px;">
                            <ul style="font-size: 15px;
                                    font-weight: 600;
                                    color: #003679;
                                    ">
                                <li style="padding:4px 0;"><span class="text-dark">Name </span>: {{$secretary->name}}
                                </li>
                                <li style="padding:4px 0;"><span class="text-dark">Designation </span>:
                                    {{$secretary->designation}}</li>
                                <li style="padding:4px 0;"><span class="text-dark">Address </span>:
                                    {{$secretary->address}}</li>
                                <li style="padding:4px 0;"><span class="text-dark">Mobile </span>: {{$secretary->phone}}
                                </li>
                                <li style="padding:4px 0;"><span class="text-dark">Email </span>: {{$secretary->email}}
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <hr>
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