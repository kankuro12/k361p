
<?php $__env->startSection('title','Board manage'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Board Member Manage</h3></p>
</div>
<section class="container">
 <div class="row" style=" padding-top:2rem;" >
        <div class="cell-md-12" >
            <form method="post"  action="/admin/board/member/add/"  id="memberadd">
                    <div class="row">
                        <div class="cell-4">
                            <input type="hidden" name="board_id"  value="<?php echo e($board->id); ?>">
                            <select data-role="select" name="member_id" id="member_id">
                                <option value="-1">----Select A Member----</option>
                            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($member->id); ?>"><?php echo e($member->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="cell-4">
                            <input type="text" name="designation" placeholder="Enter member designation">
                        </div>
                        <div class="cell-4">
                            <span class="button success" onclick="addMember();">Submit data</span>
                        </div>
                    </div>
                    
            </form>

        </div>
    </div>
 </section>

 <hr>
 <div class="container">
         <table class="table table-border cell-border" id="members" >
            <thead>
                <tr >
                    <th >#id</th>
                    <th >Member Name</th>
                    <th >Designation</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $board->boardmember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="member-<?php echo e($brd->id); ?>">
                        <td><?php echo e($brd->id); ?></td>
                        <td><?php echo e($brd->member->name); ?></td>
                        <td id="memberdeg-<?php echo e($brd->id); ?>"><?php echo e($brd->designation); ?></td>
                        <td><button  onclick="openModel(<?php echo e($brd->id); ?>);" class="button link" >Edit</button>||<button class="button link" onclick="del(<?php echo e($brd->id); ?>);" >Delete</button></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
 </div>

 <!-- model box -->
<div class="dialog" id="demoDialog1" data-role="dialog">
    <div class="dialog-title"><center>Edit Designation</center></div>
    <hr>
    <div class="dialog-content">
            <form method="post" action="" id="memberedit">
                    <div class="row">
                        <div class="cell-12">
                            <input type="hidden" name="id" id="member" value="">
                            <input type="text" name="designation" id="designation" value="" placeholder="Enter member designation">
                        </div>
                    </div>     
            </form>
    </div>
    <div class="dialog-actions text-right">
        <button class="button primary" onclick="update()">Save data</button>
        <span class="button alert js-dialog-close">Cancel</span>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
       function addMember(){
            var formData=new FormData(document.getElementById('memberadd'))
            axios.post('/admin/board/member/add/',formData)
             .then(function(response){
                data=response.data;
                console.log(data);
                var member=data.data.member;
                htmltext='<tr id="member-'+member.id+'"><td>'+member.id+'</td><td>'+member.membername+'</td><td id="memberdeg-'+member.id+'">'+member.designation+'</td><td><button  onclick="openModel('+member.id+');" class="button link" >Edit</button>||<button class="button link" onclick="del('+member.id+');" >Delete</button></td></tr>';
                $("#members").append(htmltext);
                document.getElementById('memberadd').reset();
             }).catch(function(error){
                console.log(error);
             })
        }
        function openModel(id){
             document.getElementById('member').value = id;
             var name = document.getElementById('memberdeg-'+id).innerText;
             document.getElementById('designation').value = name;
             Metro.dialog.open('#demoDialog1');
             
        }

        function update(){
            var formData=new FormData(document.getElementById('memberedit'))
            axios.post('/admin/board/member/edit/',formData)
             .then(function(response){
                data=response.data;
                console.log(data);
                var member=data.data.member;
                document.getElementById('memberdeg-'+member.id).innerText=member.designation;
                Metro.dialog.close('#demoDialog1');
             }).catch(function(error){
                console.log(error);
             })
        }

        function del(id){
        axios.post('/admin/board/member/del/',{
            'id':id,
        })
            .then(function(response){
                console.log(response);
                $('#member-'+id).remove();
            })
            .catch(function(error){
                 
            });
    }

      
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/back/boardmember/manage.blade.php */ ?>