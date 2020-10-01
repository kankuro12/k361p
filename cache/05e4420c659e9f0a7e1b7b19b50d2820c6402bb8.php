
<?php $__env->startSection('title','Member edition'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Member Edit</h3></p>
</div>
 <section class="container">
 <div class="row" style=" padding:2rem;" >
        <div class="cell-md-8" >
            <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Member Name</label>
                        <input type="text"  name="name" placeholder="Enter name" value="<?php echo e($member->name); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text"  name="address" placeholder="Enter Address" value="<?php echo e($member->address); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="number"  name="phone" placeholder="Enter phone number" value="<?php echo e($member->phone); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email"  name="email" placeholder="Enter email" value="<?php echo e($member->email); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Qualification</label>
                        <input type="text"  name="education" placeholder="Enter qualification" value="<?php echo e($member->education); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Activity</label>
                        <input type="text"  name="activity" placeholder="Enter related ativity with field" value="<?php echo e($member->activity); ?>"/>
                    </div>
                   
                    <div class="form-group">
                        <label>In Details</label>
                        <textarea data-role="textarea" name="descr" required><?php echo e($member->descr); ?></textarea>
                    </div>
                    <div class="form-group container" style="border: 1px black solid; padding-bottom:5px;" >
                        <p>Photo</p>
                        <img src="/<?php echo e($member->image); ?>" style="height: 200px;" id="photo"/>
                        <input type="file" name="image" data-role="file" onchange="readURL(this);" data-button-title="..." >
                    </div>
                    <div class="form-group">
                        <button class="button success">Submit data</button>
                        <input type="button" class="button" value="Cancel" onclick="window.location.href='/admin/member/list/'">
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
     </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/back/members/edit.blade.php */ ?>