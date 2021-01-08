
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>add role page</h2>
<!--form action="airline_display1" method="post"-->
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo e($er); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form id="" method="post" action="/editrole" >
<?php echo csrf_field(); ?>

    <div class="form-group mb-3">
      <label for="pwd">role_name</label>
      <input type="text" class="form-control" value="<?php echo e($item->display_name); ?>" placeholder="role_name" name="role_name">
    </div>
    <div class="form-group mb-3">
    <input type="text" hidden="hidden" value="<?php echo e($item->id); ?>" class="form-control" id="id" placeholder="id" name="id">
    <input type="text" hidden="hidden" value="<?php echo e(Auth::user()->id); ?>" class="form-control" id="how_create_it" placeholder="how_create_it" name="how_create_it">
    </div>
    <div class="form-group mb-3">
      <label for="role_descripe">	role_descripe</label>
      <textarea class="form-control" name="role_descripe" id="role_descripe">
      <?php echo e($item->description); ?>

</textarea>
    </div>
    <div class="form-group mb-3">
      <label for="is_active">is_active</label>
     <select class="form-control" name="is_active" id="">
     <option value=1>yes</option>
     <option value=0>no</option>
     </select>
    </div>
   
    <button type="submit" class="btn btn-primary">send</button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </form>  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

  <script>
    $('#airline_display1').on('submit',function(e){
         e.preventDefault();
         $.ajax({
             type:'post',
             url:'/addairline',
             data:$('#airline_display1').serialize(),
             success:function(response){console.log(response);
             alert("data saved");
             },
             error:function(error){console.log(error);
             alert("data dont saved");
             } 
         });

    });
  </script>

  </div>
  </div>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/role_edit.blade.php ENDPATH**/ ?>