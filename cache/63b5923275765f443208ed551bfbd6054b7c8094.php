<?php $__env->startSection('title','Event listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; ">
    <center><p style="padding:20px; font-size:18px; font-family:"> Event Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/event/add/">Add Event</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th class="sortable-column sort-asc ">#Id</th>
                    <th class="sortable-column sort-asc">Title</th>
                    <th class="sortable-column sort-asc">Address</th>
                    <th class="sortable-column sort-asc">Event Time</th>
                    <th class="sortable-column sort-asc">Event Date</th>
                    <!-- <th class="sortable-column sort-asc">Image</th>
                    <th class="sortable-column sort-asc">Description</th> -->
                    <th class="sortable-column sort-asc">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                        <td><?php echo e($event->id); ?></td>
                        <td><?php echo e($event->title); ?></td>
                        <td><?php echo e($event->address); ?></td>
                        <td><?php echo e($event->eventtime); ?></td>
                        <td><?php echo e($event->eventdate); ?></td>
                        <!-- <td><img src="/<?php echo e($event->image); ?>" style="height: 100px; width:100px; alt="></td>
                        <td><?php echo e($event->descr); ?></td> -->
                        <td><a class="button link" href="/admin/event/edit/<?php echo e($event->id); ?>/">Edit</a> || 
                        <a class="button link" href="/admin/event/del/<?php echo e($event->id); ?>/">Delete</a> </td>
                   </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\NeedTechnoSoft\propeace\views/back/event/list.blade.php */ ?>