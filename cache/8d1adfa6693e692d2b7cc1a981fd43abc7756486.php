
<?php $__env->startSection('title','Our Supporter'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Our Supporters</h3></p>
</div>
<div style="padding:1rem;">
        <table data-role="table" class="table table-border cell-border">
         <thead>
             <tr>
                 <th>S.N.</th>
                 <th>Email</th>
             </tr>
         </thead>
        
            <tbody>
                <?php $__currentLoopData = $supporters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supporter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($supporter->id); ?></td>
                    <td><?php echo e($supporter->email); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        
        </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/back/supporter.blade.php */ ?>