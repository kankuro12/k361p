
<?php $__env->startSection('title','Board listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Board Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/board/add/">Add Board Duration</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th class="sortable-column sort-asc ">#Id</th>
                    <th class="sortable-column sort-asc">Start Date</th>
                    <th class="sortable-column sort-asc">End Date</th>
                    <th class="sortable-column sort-asc">Status</th>
                    <th class="">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                        <td><?php echo e($board->id); ?></td>
                        <td><?php echo e($board->startdate); ?></td>
                        <td><?php echo e($board->enddate); ?></td>
                        <td>
                            <?php if($board->active==1): ?>
                               Active
                            <?php else: ?>
                               Deactive
                            <?php endif; ?>
                        </td>
                        <td><a class="button link " href="/admin/board/edit/<?php echo e($board->id); ?>/">Edit</a> ||   <a class="button link" href="/admin/board/manage/<?php echo e($board->id); ?>/">Manage</a> ||
                        <a class="button link" href="/admin/board/del/<?php echo e($board->id); ?>/">Delete</a> 
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
<?php /* /home5/newsfilm/propeace/views/back/boardmember/list.blade.php */ ?>