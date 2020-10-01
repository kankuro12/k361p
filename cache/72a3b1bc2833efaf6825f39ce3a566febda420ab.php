<?php $__env->startSection('title','MCCI - General Members'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>General Members</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">General Members</li>
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
            <?php $__currentLoopData = $generals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secretary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-12 col-lg-3">
                   <img src="/<?php echo e($secretary->image); ?>" alt="" style="height:150px; width:170;float:">
                </div>

                <div class="col-12 col-lg-9">
                     <div style="line-hight:10px;">
                        <ul style="font-size: 15px;
                                    font-weight: 600;
                                    color: #003679;
                                    ">
                            <li style="padding:4px 0;"><span class="text-dark">Name </span>:  <?php echo e($secretary->name); ?></li>
                            <li style="padding:4px 0;"><span class="text-dark">Address </span>: <?php echo e($secretary->address); ?></li>
                            <li style="padding:4px 0;"><span class="text-dark">Mobile </span>: <?php echo e($secretary->phone); ?></li>
                            <li style="padding:4px 0;"><span class="text-dark">Email </span>: <?php echo e($secretary->email); ?></li>
                        </ul>
                            
                     </div>
                </div>
            </div>
            <hr>
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
<?php /* /home5/newsfilm/mcci/views/front/secretary/general.blade.php */ ?>