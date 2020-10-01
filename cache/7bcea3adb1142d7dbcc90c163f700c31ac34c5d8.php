
<?php $__env->startSection('title','Gallery manage'); ?>
<?php $__env->startSection('content'); ?>
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Gallery Manage</h3></p>
</div>
<div style="padding-top:1em;">
    <div >
        <form action="" class="inline-form" entype="multipart/form-data" id="imageupload">
            <input type="hidden" name="galary_id" value="<?php echo e($gallery->id); ?>">
            <input type="file" class="w-50" data-role="file" name="image[]" multiple>
            <span class="button primary" onclick="addImage(document.getElementById('imageupload'));">Upload</span>
        </form>
    </div>
    <hr>
    <div class='row' id="galleryHolder">
        <?php $__currentLoopData = $gallery->Galaryimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cell-3" id="image-<?php echo e($galleryimage->id); ?>"> 
                <div class="img-container thumbnail">
                    <img src="<?php echo e($galleryimage->cdn); ?>" style="width:100%">
                </div>
                <div>
                    <button class="button link" onclick="delImage(<?php echo e($galleryimage->id); ?>)">Del</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    function addImage(ele){
        var formData=new FormData(ele);
        console.log(ele);
        axios.post('/admin/gallery/image/add/',formData)
            .then(function(response){
                console.log(response);
                response.data.data.forEach(image => {
                    htmltext='<div class="cell-3" id="image-'+image.id+'"><div class="img-container thumbnail"><img src="'+image.cdn+'" style="width:100%"></div><div><button class="button link" onclick="delImage('+image.id+')">Del</button></div></div>';
                    $('#galleryHolder').append(htmltext);
                });
            })
            .catch(function(error){
                 
            });
    }

    function delImage(id){
        axios.post('/admin/gallery/image/del/',{
            'id':id
        })
        .then(function(response){
               $('#image-'+id).remove(); 
                
        })
        .catch(function(error){
                 
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home1/needtech/mechicci.org.np/views/back/gallery/manage.blade.php */ ?>