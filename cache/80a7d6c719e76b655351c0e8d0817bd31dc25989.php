<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<style>
        .login-form {
            width: 600px;
            height: auto;
            top: 20%;
        }
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }
        .alert{
            border:2px red solid; 
            padding:7px;
            background:#f44336;
            color:white;
            margin-top:15px;
            }
        .success{
            border:2px green solid; 
            padding:7px;
            background:green;
            color:white;
            margin-top:15px;
        }
       
</style>
<div class="h-vh-100 bg-brandColor2">
    <form class="login-form bg-white p-6 mx-auto border bd-default win-shadow "       
          method="post"
          action="/admin/changepass/"
          onsubmit="return checkpassword();"
          >
        <span class="mif-vpn-lock mif-4x place-right" style="margin-top: -10px;"></span>
        <h2 class="text-light">Change Password</h2>
        <hr class="thin mt-4 mb-4 bg-white">
        <div class="form-group">
            <input type="password" name="oldpass" id="password" data-role="input" data-prepend="<span class='mif-key'>" placeholder="Enter current password..." required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password1"  data-role="input" data-prepend="<span class='mif-key'>" placeholder="Enter new password..." required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password2"  data-role="input" data-prepend="<span class='mif-key'>" placeholder="Confirm new password..." required>
        </div>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="success"> 
                <?php echo e($_SESSION['success']); ?>

                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>  

            <?php
            unset($_SESSION['success']);
            ?>
        <?php endif; ?>
        <?php if(isset($_SESSION['error_1'])): ?>
            <div class="alert"> 
                <?php echo e($_SESSION['error_1']); ?>

                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>  

            <?php
            unset($_SESSION['error_1']);
            ?>
        <?php endif; ?>
       
        <div class="form-group mt-10">
            <input type="checkbox" data-role="checkbox" data-caption="Remember me" class="place-right">
            <button class="button primary">Save Change</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
   function checkpassword(){
       if(document.getElementById('password1').value!=document.getElementById('password2').value){
             alert('Please comfirm new password');
             return false;
       }
   }
   function invalidForm(){
            var form  = $(this);
            form.addClass("ani-ring");
            setTimeout(function(){
                form.removeClass("ani-ring");
            }, 1000);
        }
        function validateForm(){
            $(".login-form").animate({
                opacity: 0
            });
        }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\NeedTechnoSoft\mcci\views/back/index.blade.php */ ?>