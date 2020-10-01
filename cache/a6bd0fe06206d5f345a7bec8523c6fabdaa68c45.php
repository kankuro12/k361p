
<?php $__env->startSection('title','Gallery addition'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Galleries</h3></p>
</div>
<div>
<a href="/admin/gallery/show/">
Show galary
</a>
</div>
<div class="container">
    <div class="cell-md-6" style="padding-top:1.5rem;"  >
        <form method="post" class="inline-form" id="newgallery" >
         <input type="text" name="name" placeholder="Enter gallery name" required>
         <span class="button success" onclick="addGallery(document.getElementById('newgallery'));">Add Gallery</span>
        </form>
    </div>
    <hr>
    <table class="table table-border cell-border" id="galaries">
        <thead>
            <tr style="text-align:left;">
                <th>Name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody id="gallerybody">
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="galary-<?php echo e($gallery->id); ?>">
                    <td><input id="galaryname-<?php echo e($gallery->id); ?>" type="text" style="width:100%;border:none;" value="<?php echo e($gallery->name); ?>"/></td>
                    <td>    
                        <a class="button link" href="/admin/gallery/manage/<?php echo e($gallery->id); ?>/">
                            Manage
                        </a> |
                        <button class="button link" onclick="update(<?php echo e($gallery->id); ?>);"> 
                            Update
                        </button> | 
                        <button class="button link" onclick="del(<?php echo e($gallery->id); ?>);">
                            Delete
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    function addGallery(ele){
        var formData=new FormData(ele);
        console.log(ele);
        axios.post('/admin/gallery/add/',formData)
            .then(function(response){
                console.log(response);
                var galary = response.data.data.gallery;
                console.log(galary);
                // var htmltext="asdfasd";
                var htmltext='<tr id="galary-'+galary.id+'"><td><input id="galaryname-'+galary.id+'" type="text" style="width:100%;border:none;" value="'+galary.name+'"/></td><td><a class="button link" href="/admin/gallery/manage/'+galary.id+'/">Manage</a> | <button class="button link" onclick="update('+galary.id+');"> Update </button> | <button class="button link" onclick="del('+galary.id+');"> Delete </button> </td> </tr>';
                console.log(htmltext);
                document.getElementById('gallerybody').innerHTML+=htmltext;
                // $('#galaries').append(htmltext);
            })
            .catch(function(error){
                 
            });
    }

    function update(id){
        console.log($('#galaryname-'+id).val());
        axios.post('/admin/gallery/update/',{
            'id':id,
            'name':$('#galaryname-'+id).val()
        })
            .then(function(response){
                console.log(response);
            })
            .catch(function(error){
                 
            });
    }

    function del(id){
        console.log($('#galary-'+id).val());
        axios.post('/admin/gallery/del/',{
            'id':id,
        })
            .then(function(response){
                console.log(response);
                $('#galary-'+id).remove();
            })
            .catch(function(error){
                 
            });
    }

    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home5/newsfilm/propeace/views/back/gallery/add.blade.php */ ?>