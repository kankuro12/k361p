<?php $__env->startSection('title','MCCI - Change Password'); ?>
<?php $__env->startSection('content'); ?>
<style>
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
    font-weight:bold;
}
.good{
    border:2px #1dba09 solid; 
    padding:7px;
    background:#1dba09;
    color:white;
    font-weight:bold;
    margin-bottom:1rem;
}
</style>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/assets/front/img/bg-img/6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Password Change </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Password Change</li>
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

            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                             <!-- Contact Area -->
                              <div class="contact-form-area contact-page">
                            <h4 class="mb-50">Change Current Password</h4>
                                <?php if(isset($_SESSION['success'])): ?>
                                <div class="good"> 
                                        <?php echo e($_SESSION['success']); ?>

                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    
                                    </div>  

                                    <?php
                                    unset($_SESSION['success']);
                                    ?>
                                <?php endif; ?>

                                <?php if(isset($_SESSION['error'])): ?>
                                <div class="alert"> 
                                        <?php echo e($_SESSION['error']); ?>

                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    </div>  

                                    <?php
                                    unset($_SESSION['error']);
                                    ?>
                                <?php endif; ?>
                              

                                <form method="post" onsubmit="return checkPass(this);">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="password" name="old" class="form-control" id="name" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" id="pass1" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" id="pass2" placeholder="Re-Type Password">
                                            </div>
                                        </div>
                                    
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" type="submit" >Save</button>
                                        </div>
                                    </div>
                                </form>
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

<?php $__env->startSection('script'); ?>
    <script>
       function checkPass(){
           if(document.getElementById('pass1').value!=document.getElementById('pass2').value){
               alert('New Password Does Not Match');
               return false;
           }
       }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/front/login/changepass.blade.php */ ?>