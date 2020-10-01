<?php $__env->startSection('title','propeace - Notice'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Notices Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notice</li>
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
                                        <div class="feature-wrapper mb-30">
                                               <div class="feature-title-heading ">
                                                    <h3><a href="/notices/" class=""><?php echo e($notice->title); ?></a></h3>
                                                    <span></span>
                                                </div>
                                                    <div class="feature-text">
                                                       <p><?php echo $notice->desc; ?></p>
                                                    </div>
                                                    <p style="margin-top:2rem;"><img src="/<?php echo e($notice->image); ?>" alt="" ></p>
                                                    <div style="padding:.7rem 0;">
                                                        <small class="text-warning pull-left" style="color: #f80!important;"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> - <?php echo e($notice->published); ?></small>
                                                        <small class="text-info pull-right" style="color: #f80!important;"><i class="fa fa-user-circle" aria-hidden="true"></i> - <?php echo e($notice->publisher); ?></small>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/front/notice/single.blade.php */ ?>