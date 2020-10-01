<?php $__env->startSection('title','propeace - Past President'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Past Presidents</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Past Presidet</li>
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
                    <div class="row">
                        <?php $__currentLoopData = $presidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $president): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($president->board->active==0): ?>
                            <?php if(strtolower($president->designation)=='president'): ?>
                                <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                                        <div class="card">
                                            <img class="card-img-top" src="/<?php echo e($president->member->image); ?>">
                                            <div class="card-block">
                                                <p class="text-center" style="color:#003679;"><b><?php echo e($president->member->name); ?></b></p>
                                                <p class="text-center"><b> <?php echo e($president->board->startdate); ?> - <?php echo e($president->board->enddate); ?></b></p>
                                            </div>
                                        </div>
                                </div>
                            <?php endif; ?>
                            <?php endif; ?>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /* /home1/needtech/mechicci.org.np/views/front/committee/pastpre.blade.php */ ?>