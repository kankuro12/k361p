<?php $__env->startSection('title','Info listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; ">
    <center><p style="padding:20px; font-size:18px; font-family:">Boardinfo Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/boardinfo/add/">Add Info</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th class="sortable-column sort-asc ">#Id</th>
                    <th class="sortable-column sort-asc">Title</th>
                    <th class="sortable-column sort-asc">Date</th>
                    <th class="sortable-column sort-asc">File Type</th>
                    <th class="sortable-column sort-asc">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $boardinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boardinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                        <td><?php echo e($boardinfo->id); ?></td>
                        <td><?php echo e($boardinfo->title); ?></td>
                        <td><?php echo e($boardinfo->date); ?></td>
                        <td><?php echo e($boardinfo->files); ?></td>
                        <td><a class="button link" href="/admin/boardinfo/edit/<?php echo e($boardinfo->id); ?>/">Edit</a> || 
                        <a class="button link" href="/admin/boardinfo/del/<?php echo e($boardinfo->id); ?>/">Delete</a> </td>
                   </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\NeedTechnoSoft\propeace\views/back/boardinfo/list.blade.php */ ?>