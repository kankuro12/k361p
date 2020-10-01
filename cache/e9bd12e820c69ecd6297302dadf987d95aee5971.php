
<?php $__env->startSection('title','Committee listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Committee Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/committe/add/">Add Committee</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th class="sortable-column sort-asc ">#Id</th>
                    <th class="sortable-column sort-asc">Committee Name</th>
                    <th class="sortable-column sort-asc">Start Date</th>
                    <th class="sortable-column sort-asc">End Date</th>
                    <th class="sortable-column sort-asc">Status</th>
                    <th class="">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $committes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                        <td><?php echo e($committe->id); ?></td>
                        <td><?php echo e($committe->name); ?></td>
                        <td><?php echo e($committe->startdate); ?></td>
                        <td><?php echo e($committe->enddate); ?></td>
                        <td>
                            <?php if($committe->active==1): ?>
                               Active
                            <?php else: ?>
                               Deactive
                            <?php endif; ?>
                        </td>
                        <td><a class="button link " href="/admin/committe/edit/<?php echo e($committe->id); ?>/">Edit</a> ||   <a class="button link" href="/admin/committe/manage/<?php echo e($committe->id); ?>/">Manage</a> ||
                        <a class="button link" href="/admin/committe/del/<?php echo e($committe->id); ?>/">Delete</a> 
                      </td>
                   </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/back/committes/list.blade.php */ ?>