<?php $__env->startSection('title','propeace - Event'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Event</li>
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
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                       <div class="blog-content">
                            <span> Events</span>
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
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /* /home1/needtech/mechicci.org.np/views/front/event/list.blade.php */ ?>