
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>edit airline page</h2>
<!--form action="airline_display1" method="post"-->
<form id="airline_edit9" method="post" action="/editairline" >
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="form-group col-md-6">
      <label for="email">code</label>
      <input type="text" hidden=hidden  value="<?php echo e($item->id); ?>" class="form-control" id="email" placeholder="Enter email" name="id">
      <input type="text" value="<?php echo e($item->id); ?>"  class="form-control" id="email" placeholder=" airline_code" name="airline_code">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">airline</label>
      <input type="text" value="<?php echo e($item->airline_name); ?>"  class="form-control" id="" placeholder="airline_name" name="airline">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">country</label>
      <input type="text" value="<?php echo e($item->country); ?>"  class="form-control" id="country" placeholder="country " name="country">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">carrier_code</label>
      <input type="text" value="<?php echo e($item->carrier_code); ?>"  class="form-control" id="carrier_code" placeholder=" carrier_code" name="carrier_code">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">code</label>
      <input type="text" value="<?php echo e($item->code); ?>"  class="form-control" id="code" placeholder="code " name="code">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">IATA</label>
      <input type="text" value="<?php echo e($item->IATA); ?>"  class="form-control" id="IATA" placeholder="IATA" name="IATA">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">	remark</label>
      <textarea class="form-control" name="remark" id="remark"> 
      <?php echo e($item->remark); ?>

      </textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="is_active">is_active</label>
     <select name="is_active" class="form-control" id="">
     <option value=1>1</option>
     <option value=0>2</option>
     </select>
    </div>
   
   </div>
    <button type="submit" class="btn btn-primary">send</button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </form>  
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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

  </div>
  </div>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/airline_edit.blade.php ENDPATH**/ ?>