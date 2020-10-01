<?php $__env->startSection('title','propeace - Gallery'); ?>
<?php $__env->startSection('content'); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Galleries</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <style>
    ._card{
        border:1px solid #f1f1f1;padding:10px;margin:2px;border-radius:5px;color:blue;display:inline-block;background:white;cursor: pointer;
    }
    ._card:hover{
        color:white;
        background:blue;
        transform: scale(1.1);
    }
</style>
<div class="container">
    <div style="margin-top:10px;">
        <button class="_card" onclick="selectGalary(-1)">
            All
        </button>
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button class="_card" onclick="selectGalary(<?php echo e($gallery->id); ?>)">
            <?php echo e($gallery->name); ?>

        </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row mb-50" style="margin-top:5px;">
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $gallery->Galaryimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3 imageHolder" data-galary="<?php echo e($gallery->id); ?>">
                <div  class=" img-container ">
                    <img src="<?php echo e($image->cdn); ?>" style="width:100%">
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function selectGalary(id){
            var images=document.querySelectorAll('.imageHolder')
            console.log(images);
                images.forEach(image => {
                    console.log(image); 
                    if(id===-1){
                        image.style.display="block";
                        // image.style.disp
                    }else{
                        if(image.dataset.galary==id){
                            image.style.display="block";

                        }else{
                            image.style.display="none";

                        }
                    }
                });
            
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/front/gallery/list.blade.php */ ?>