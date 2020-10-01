
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/back/css/metro-all.css">
    <title>Messagess</title>
   
</head>

<body >

<div style="padding:2rem;">

<table class="table table-border cell-border" data-role="table">
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subjects</th>
        <th>Message</th>
        <th>Date</th>
    </tr>
</thead>

<tbody>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($message->name); ?></td>
        <td><?php echo e($message->email); ?></td>
        <td><?php echo e($message->sub); ?></td>
        <td><?php echo e($message->detail); ?></td>
        <td><?php echo e($message->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

</div>
<script src="/assets/common/js/jquery.js"></script>
<script src="/assets/back/js/metro.js"></script>

</body>
</html>
<?php /* E:\NeedTechnoSoft\propeace\views/back/message.blade.php */ ?>