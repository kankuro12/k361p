
<?php $__env->startSection('title','Board edtion'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Board Edit</h3></p>
</div>
 <section class="container">
 <div class="row" style=" padding:2rem;" >
        <div class="cell-md-8" >
            <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="text" id="nepali-calendar" name="startdate" value="<?php echo e($board->startdate); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="text" id="nepali-patro"  name="enddate" value="<?php echo e($board->enddate); ?>"/>
                    </div>

                    <div class="form-group">
                      
                        <input type="checkbox" onchange="userStatus(this);"  
                        data-role="checkbox" 
                        <?php if($board->active==1): ?>
                            checked
                        <?php endif; ?>
                        > Active Year
                        <input type="hidden" name="active" id="active" value="<?php echo e($board->active); ?>">
                    </div>

                    
                    <div class="form-group">
                        <button class="button success">Submit data</button>
                        <input type="button" class="button" value="Cancel" onclick="window.location.href='/admin/board/list/'">
                    </div>
            </form>

        </div>

    </div>
 </section>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    function userStatus(ele){
        if(ele.checked){
           document.getElementById('active').value=1;
        }else{
            document.getElementById('active').value=0;
             }
    }
    $(document).ready(function () {
        $('#nepali-calendar').nepaliDatePicker();
    });

    $(document).ready(function () {
        $('#nepali-patro').nepaliDatePicker();
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/mcci/views/back/boardmember/edit.blade.php */ ?>