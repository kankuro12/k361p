<?php $__env->startSection('title','MCCI - News'); ?>
<?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                       <div class="blog-content">
                            <span>News</span>
                            <a href="/mcci/news/single/<?php echo e($new->id); ?>/" class="post-title"><?php echo e($new->title); ?></a>
                            <div class="blog-meta">
                                <a href="#" class="post-author"><img src="/assets/front/img/core-img/pencil.png" alt="">  <?php echo e($new->publisher); ?></a>
                                <a href="#" class="post-date"><img src="/assets/front/img/core-img/calendar.png" alt="">  <?php echo e($new->published); ?></a>
                            </div>
                        </div>
                        <div class="blog-thumbnail">
                            <a href="/mcci/news/single/<?php echo e($new->id); ?>/"><img src="/<?php echo e($new->image); ?>" alt=""></a>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/front/news/list.blade.php */ ?>