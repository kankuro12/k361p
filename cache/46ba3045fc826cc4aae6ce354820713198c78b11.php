
<?php $__env->startSection('title','Boardinfo edit'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Info Edit</h3></p>
</div>
 <section class="container">
 <div class="row" style=" padding:2rem;" >
        <div class="cell-md-8" >
            <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"  name="title" placeholder="Enter Title" value="<?php echo e($info->title); ?>" required />
                    </div>
                   
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text"  id="nepali-calendar" name="date" value="<?php echo e($info->date); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea data-role="textarea" name="descr"><?php echo e($info->descr); ?></textarea>
                    </div>
                    <div class="form-group " >
                        <p>Attachment</p>
                        Current File: <?php echo e($info->files); ?>

                        <input type="file" name="files" data-role="file" data-button-title="...">
                    </div>
                    <div class="form-group">
                        <button class="button success">Submit data</button>
                        <input type="button" class="button" value="Cancel" onclick="window.location.href='/admin/boardinfo/list/'" >
                    </div>
            </form>

        </div>

    </div>
 </section>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

 <script>

     $(document).ready(function () {
        $('#nepali-calendar').nepaliDatePicker();
    });
     </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/back/boardinfo/edit.blade.php */ ?>