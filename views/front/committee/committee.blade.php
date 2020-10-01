@extends('front.app')
@section('title','MCCI - Committee')
@section('content')
<style>
.styl tr td a{
    display: block;
    font-size: 15px;
    padding: 7px 0;
    font-weight: 600;
    color: #003679;
}
.styl tr td a:hover{
    color:#ffbb38;
}
</style>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Committees</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Committee</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

       
  
<!-- ##### News Area Start ##### -->
<section class="news-area section-padding-100" >
        <div class="container">

            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                       <div class="blog-content">
                            <span>Current</span>
                            <a href="#" class="post-title">Our Communities</a>
                        
                        </div>
                        <div style="padding:2.4rem;">
                            <table class="table styl">
                                @foreach($committee as $committe)
                                    <tr>
                                        <td><a href="/mcci/committeemember/{{$committe->id}}/">{{$committe->name}}</a></td>
                                        <td><a href="/mcci/committeemember/{{$committe->id}}/">Start From:- {{$committe->startdate}}</a></td>
                                        <td><a href="/mcci/committeemember/{{$committe->id}}/">Status:-  @if($committe->active==1)
                                                                    Active
                                                                    @else
                                                                    Deactive
                                                                    @endif
                                        </a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
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
                                       <li><a href="/mcci/pastpresident/">Past President</a></li>
                                        <li><a href="/mcci/secretariat/">secretariat</a></li>
                                        <li><a href="/mcci/committee/">Our Committee</a></li>
                                        <li><a href="/mcci/boardmember/">Executive Board Member</a></li>
                                        <li><a href="/mcci/gallery/list/">Our Gallery</a></li>
                                        <li><a href="/mcci/about/">About Us</a></li>
                                        <li><a href="/mcci/contact/">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- side bar end -->
            </div>
        </div>
</section>

 @endsection