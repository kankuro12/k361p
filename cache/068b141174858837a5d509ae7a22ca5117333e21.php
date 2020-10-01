<?php $__env->startSection('title','mechicci.org.np'); ?>
<?php $__env->startSection('content'); ?>
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area" >
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/assets/front/img/propeace.jpeg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms"></h6>  
                                <h2 data-animation="fadeInUp" data-delay="300ms"> MECHI CHAMBER OF<span> COMMERCE AND</span> INDUSTRY</h2>
                               
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
                            <a href="/propeace/news/single/<?php echo e($news[0]->id); ?>/" class="post-title"><?php echo e($news[0]->title); ?></a>
                            <div class="blog-meta">
                                <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt="">  <?php echo e($news[0]->publisher); ?></a>
                                <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt="">  <?php echo e($news[0]->published); ?></a>
                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="/propeace/news/single/<?php echo e($news[0]->id); ?>/"><img src="/<?php echo e($news[0]->image); ?>" alt=""></a>
                        </div>
                        <p><?php echo substr($news[0]->descr,0,570); ?>....</p>
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

                            <?php for($i=1;$i<count($news);$i++): ?>
                                            <!-- Single News Area -->
                                            <div class="single-news-area d-flex align-items-center">
                                                <div class="news-thumbnail">
                                                    <img src="/<?php echo e($news[$i]->image); ?>" alt="" style="height:120px;">
                                                </div>
                                                <div class="news-content">
                                                    <span><?php echo e($news[$i]->published); ?></span>
                                                    <a href="/propeace/news/single/<?php echo e($news[$i]->id); ?>/"><?php echo e($news[$i]->title); ?></a>
                                                    <div class="news-meta">
                                                        <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt=""> <?php echo e($news[$i]->publisher); ?></a>
                                                        <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt=""><?php echo e(substr($news[$i]->getdate()->format('d F'),0,6)); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single News Area -->
                            <?php endfor; ?>
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
                            <a href="/propeace/event/single/<?php echo e($event->id); ?>/" class="post-title"><?php echo e($event->title); ?></a>
                            <div class="blog-meta">
                                <a href="#" class="post-date">Date:-  <?php echo e($event->eventdate); ?></a>  |
                                <a href="#" class="post-author">Time:-  <?php echo e($event->eventtime); ?></a>
                                <a href="#" class="post-date">Vanue:-  <?php echo e($event->address); ?></a>

                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="/propeace/event/single/<?php echo e($event->id); ?>/"><img src="/<?php echo e($event->image); ?>" alt=""></a>
                        </div>
                        <p><?php echo substr($event->descr,0,570); ?>....</p>
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
                                            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="feature-wrapper mb-30">
                                                    <div class="feature-title-heading ">
                                                    <h3><a href="/propeace/notice/single/<?php echo e($notice->id); ?>/" class=""><?php echo e($notice->title); ?></a></h3>
                                                    <span></span>
                                                    </div>
                                                    <div class="feature-text">
                                                    <p><?php echo substr($notice->desc,0,150); ?>...</p>
                                                    </div>
                                                    <div style="padding:.7rem 0;">
                                                    <small class="text-warning pull-left" style="color: #f80!important;"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> - <?php echo e($notice->published); ?></small>
                                                    <small class="text-info pull-right" style="color: #f80!important;"><i class="fa fa-user-circle" aria-hidden="true"></i> - <?php echo e($notice->publisher); ?></small>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                           
                                </div>
                            </div>
                        </div>
                        <!-- side bar end -->
            </div>
        </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/front/index.blade.php */ ?>