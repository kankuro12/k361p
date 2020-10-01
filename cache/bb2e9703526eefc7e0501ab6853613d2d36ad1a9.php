
<?php $__env->startSection('title','Notice listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Notice Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/notice/add/">Add Notice</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th >Action</th>
                    <th >Image</th>
                    <th class="sortable-column sort-asc">Title</th>
                    <th class="sortable-column sort-asc">Published By</th>
                    <th class="sortable-column sort-asc">Published Date</th>
                    <!-- <th class="sortable-column sort-asc">Description</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                   <td><a class="button link" href="/admin/notice/edit/<?php echo e($notice->id); ?>/">Edit</a> || 
                        <a class="button link" href="/admin/notice/del/<?php echo e($notice->id); ?>/">Delete</a> </td>
                        <td><img src="/<?php echo e($notice->image); ?>" alt="" style="height:200px; width:200px;"></td>
                        <td><?php echo e($notice->title); ?></td>
                        <td><?php echo e($notice->publisher); ?></td>
                        <td><?php echo e($notice->published); ?></td>
                        <!-- <td><?php echo e($notice->desc); ?></td> -->
                       
                   </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/back/notice/list.blade.php */ ?>