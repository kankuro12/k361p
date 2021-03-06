
<?php $__env->startSection('title','New addition'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> News Addition</h3></p>
</div>


<section class="container">
 <div class="row" style=" padding:2rem;" >
        <div class="cell-md-8" >
            <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"  name="title" placeholder="Enter Title" required/>
                    </div>
                    <div class="form-group">
                        <label>Published By</label>
                        <input type="text"  name="publisher" placeholder="Enter name" required/>
                    </div>
                   
                    <div class="form-group">
                        <label>Published Date</label>
                        <input type="text" id="nepali-calendar"  name="published" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea  name="descr" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Related Gallery</label>
                        <select name="galary_id" id="galary_id" data-role="select" required>
                               <option value="">---Select Gallery---</option>
                            <?php $__currentLoopData = $galaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($galary->id); ?>"><?php echo e($galary->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group container" style="border: 1px black solid; padding-bottom:5px;" >
                        <p>Feature Image</p>
                        <img src="" style="height: 200px;" id="photo"/>
                        <input type="file" name="image" data-role="file" onchange="readURL(this);" data-button-title="..." >
                    </div>
                    
                    <div class="form-group">
                        <button class="button success">Submit data</button>
                        <input type="button" class="button" value="Cancel" onclick="window.location.href='/admin/news/list/'">
                    </div>
            </form>

        </div>

    </div>
 </section>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

 <script>
        function readURL(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();
 
             reader.onload = function (e) {
                 $('#photo')
                     .attr('src', e.target.result);
             };
 
             reader.readAsDataURL(input.files[0]);
         }
     }

     $(document).ready(function () {
        $('#nepali-calendar').nepaliDatePicker();
    });
     </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/back/news/add.blade.php */ ?>