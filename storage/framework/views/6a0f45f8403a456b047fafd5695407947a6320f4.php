
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>add role to user</h2>
<!--form action="airline_display1" method="post"-->
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo e($er); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form id="" method="post" action="/addroleuser" >
<?php echo csrf_field(); ?>

<div class="form-group col-6">
                  <label>select user</label>
                  <select class="form-control select2" name="user_id" style="width: 100%;">
                  <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
    <div class="form-group mb-3">
      <input type="text" hidden="hidden" value="<?php echo e(Auth::user()->id); ?>" class="form-control" id="how_create_it" placeholder="how_create_it" name="how_create_it">
    </div>
    <div class="form-group">
    <label>select roles</label>

    <div class="checkbox">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <label><input type="checkbox" name="role[]" value="<?php echo e($item1->id); ?>"><?php echo e($item1->name); ?></label>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
                
    <button type="submit" class="btn btn-primary">send</button>
   
  </form>  

  <script>
$('.select2').select2();
</script>
  </div>
  </div>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/add_role_user.blade.php ENDPATH**/ ?>