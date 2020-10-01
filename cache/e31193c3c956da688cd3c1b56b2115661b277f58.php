<?php $__env->startSection('title','MCCI - Local Area'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Local Area Promotion</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Local Area</li>
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
            <hr>
            <div class="row" >
                <!-- Single News Area -->
                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-lg-6" style="margin-top:3rem;">
                <img src="/<?php echo e($area->image); ?>" alt="">
                   
                </div>
                
             <!-- Sidebar Area -->
             <hr>
                 <div class="col-12 col-sm-9 col-md-6 col-lg-6" style="margin-top:3rem;">
                     <h2><?php echo e($area->name); ?></h2>
                     <p><?php echo $area->detail; ?></p>
                 </div>       <!-- side bar end -->
                
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/front/service/area.blade.php */ ?>