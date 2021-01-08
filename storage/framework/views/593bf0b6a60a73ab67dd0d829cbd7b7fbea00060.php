
<?php $__env->startSection('main_content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  <div class="row">
  <div class="col-12">
  <h1 class="text-center">display roles</h1>
  </div>
  
<div class="container">            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>role_name</th>
        <th>role_status</th>
        <th>created_date</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr id="tr<?php echo e($item->id); ?>" >
      <td><?php echo e($item->id); ?></td>
      <td><?php echo e($item->display_name); ?></td>
      <td>
      <?php if($item->is_active == 0): ?>
      
      <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input onclick="myFunction<?php echo e($item->id); ?>()" type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($item->id); ?>">
                      <label class="custom-control-label" for="customSwitch<?php echo e($item->id); ?>"></label>
                      
                    </div>
                  </div>
                  <?php elseif($item->is_active == 1): ?>
                  <div class="form-group">
                    <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                      <input onclick="myFunction<?php echo e($item->id); ?>()" checked type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($item->id); ?>">
                      <label class="custom-control-label" for="customSwitch<?php echo e($item->id); ?>"></label>
                    </div>
                  </div>

<?php endif; ?>

      </td>
      <td><?php echo e($item->created_at); ?></td>
        <td>
        <div class="btn-group btn-group-sm">
  <a type="button" class="btn btn-success" href="<?php echo e(url('role_edit/'.$item->id)); ?>"><i class="fas fa-pencil-alt "></i></a>
  <a type="button" class="btn btn-danger"  data-toggle="modal" data-target="#myModalair<?php echo e($item->id); ?>"  ><i class="fas fa-trash "></i></a>
</div>
        </td>
      </tr>
       <!-- The Modal -->
     <div class="modal fade" id="myModalair<?php echo e($item->id); ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="row text-center"><div class="col-12 p-4"><i style="font-size: 70px;" class="fas fa-exclamation-circle text-center text-danger"></i></div><div class="col-12 p-3"><h3 class="text-center">are you sure you want to delete role ??</h3></div><div class="col-12 p-2"><button type="button" class="btn btn-success" data-dismiss="modal" >cansel</button><button type="button" class="btn btn-danger" onclick="delete<?php echo e($item->id); ?>()" style="width:15%;">ok</button></div></div>
      </div>
   </div>
  </div>
</div>
      <script>
function myFunction<?php echo e($item->id); ?>() {
  var checkBox<?php echo e($item->id); ?> = document.getElementById("customSwitch<?php echo e($item->id); ?>");
  
  if (checkBox<?php echo e($item->id); ?>.checked == true){
    $.ajax({
             type:'get',
             url:'/is_active/'+<?php echo e($item->id); ?>,
             data:{id:<?php echo e($item->id); ?>},
             success:function(response){console.log(response);
            // alert("data saved");
             },
             error:function(error){console.log(error);
            // alert("data dont saved");
             } 
         });
  } else{
    $.ajax({
             type:'get',
             url:'/no_active/'+<?php echo e($item->id); ?>,
             data:{id:<?php echo e($item->id); ?>},
             success:function(response){console.log(response);
            // alert("data saved");
             },
             error:function(error){console.log(error);
            // alert("data dont saved");
             } 
         });
}
}

function delete<?php echo e($item->id); ?>() {
 
       $.ajax({
             type:'get',
             url:'/role_delete/'+<?php echo e($item->id); ?>,
             data:{id:<?php echo e($item->id); ?>},
             success:function(response){console.log(response);
              $('#myModalair<?php echo e($item->id); ?>').modal('toggle');
              document.getElementById('tr<?php echo e($item->id); ?>').style.display ='none';

             },
             error:function(error){console.log(error);
             } 
         });
  } 

</script>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <?php echo e($data->links()); ?>


  
</div>
  </div>
  </div>
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/role_display.blade.php ENDPATH**/ ?>