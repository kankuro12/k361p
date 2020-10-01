
<?php $__env->startSection('title','Secretary addition'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Secretary Addition</h3></p>
</div>
 <section class="container">
 <div class="row" style=" padding:2rem;" >
        <div class="cell-md-8" >
            <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Member Name</label>
                        <input type="text"  name="name" placeholder="Enter name" required/>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text"  name="designation" placeholder="Enter Address" required/>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text"  name="address" placeholder="Enter Address" required/>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="number"  name="phone" placeholder="Enter phone number" required/>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email"  name="email" placeholder="Enter email" required/>
                    </div>
                  
                    <div class="form-group container" style="border: 1px black solid; padding-bottom:5px;" >
                        <p>Photo</p>
                        <img src="" style="height: 200px;" id="photo"/>
                        <input type="file" name="image" data-role="file" onchange="readURL(this);" data-button-title="..." >
                    </div>
                    <div class="form-group">
                        <button class="button success">Submit data</button>
                        <input type="button" class="button" value="Cancel" onclick="window.location.href='/admin/secretary/list/'">
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
<?php /* /home1/needtech/mechicci.org.np/views/back/secretary/add.blade.php */ ?>