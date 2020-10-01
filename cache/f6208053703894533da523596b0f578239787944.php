<?php $__env->startSection('title','Members listing'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Members Listing</h3></p>
</div>


<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/member/add/">Add Member</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    <th class="sortable-column sort-asc ">#Id</th>
                    <th class="">Image</th>
                    <th class="sortable-column sort-asc">Name</th>
                    <th class="sortable-column sort-asc">Address</th>
                    <th class="sortable-column sort-asc">Telephone</th>
                    <th class="sortable-column sort-asc">Email</th>
                    <!-- <th class="sortable-column sort-asc">Education</th>
                    <th class="sortable-column sort-asc">Activity</th>
                    <th class="sortable-column sort-asc">Description</th> -->
                    <th class="">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($member->id); ?></td>
                    <td><img src="/<?php echo e($member->image); ?>" alt="" style="height:100px;width:100px;"></td>
                    <td><?php echo e($member->name); ?></td>
                    <td><?php echo e($member->address); ?></td>
                    <td><?php echo e($member->phone); ?></td>
                    <td><?php echo e($member->email); ?></td>
                    <!-- <td><?php echo e($member->education); ?></td>
                    <td><?php echo e($member->activity); ?></td>
                    <td><?php echo e($member->descr); ?></td> -->
                    <td><a class="button link" href="/admin/member/edit/<?php echo e($member->id); ?>/">Edit</a> || 
                        <a class="button link" href="/admin/member/del/<?php echo e($member->id); ?>/">Delete</a> </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\NeedTechnoSoft\mcci\views/back/members/list.blade.php */ ?>