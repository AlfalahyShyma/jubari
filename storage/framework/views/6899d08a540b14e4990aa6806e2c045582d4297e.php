
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  <div class="row">
  <div class="col-10">
  <h1 class="text-center">display users	</h1>
  </div>
  <div class="col-2">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      status 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/user_display">all</a>
      <a class="dropdown-item " href="/user_display/1"> Active</a>
      <a class="dropdown-item " href="/user_display/0">No Active</a>
    </div>
  </div>
</div>
  
<div class="container">  
<?php if(Session::has('success')): ?>  
<div class="alert alert-success" role="alert">
<?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>
  <table class="table table-striped" id="table">
    <thead>
      <tr>
        <th>#</th>
        <th>user_name</th>
        <th>user_email</th>
        <th>department</th>
        <th>user_status</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr id="tr<?php echo e($item->u_id); ?>" class="status<?php echo e($item->u_is_active); ?>" >
      <td><?php echo e($item->u_id); ?></td>
      <td><?php echo e($item->u_name); ?></td>
      <td><?php echo e($item->u_email); ?></td>      
      <td><?php echo e($item->d_name); ?></td>
      <td>
      <?php if($item->u_is_active == 0): ?>
      
      <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input onclick="myFunction<?php echo e($item->u_id); ?>()" type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($item->u_id); ?>">
                      <label class="custom-control-label" for="customSwitch<?php echo e($item->u_id); ?>"></label>
                      
                    </div>
                  </div>
                  <?php elseif($item->u_is_active == 1): ?>
                  <div class="form-group">
                    <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                      <input onclick="myFunction<?php echo e($item->u_id); ?>()" checked type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($item->u_id); ?>">
                      <label class="custom-control-label" for="customSwitch<?php echo e($item->u_id); ?>"></label>
                    </div>
                  </div>

<?php endif; ?>

      </td>    
        <td>
        <div class="btn-group btn-group-sm">
  <a type="button" class="btn btn-success" href="<?php echo e(url('user_edit/'.$item->u_id)); ?>"><i class="fas fa-pencil-alt "></i></a>
  <a type="button" class="btn btn-danger"  onclick="delete<?php echo e($item->u_id); ?>()" ><i class="fas fa-trash "></i></a>
</div>
        </td>
      </tr>
     

      <script>
     function dep_select(){
     var m= $("#selectdep").val();
     if(m==1){
      $('.dep4').css('display','none');
        }
     }
function myFunction<?php echo e($item->u_id); ?>() {
  var checkBox<?php echo e($item->u_id); ?> = document.getElementById("customSwitch<?php echo e($item->u_id); ?>");
  
  if (checkBox<?php echo e($item->u_id); ?>.checked == true){
    $.ajax({
             type:'get',
             url:'/is_active_user/'+<?php echo e($item->u_id); ?>,
             data:{id:<?php echo e($item->u_id); ?>},
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
             url:'/no_active_user/'+<?php echo e($item->u_id); ?>,
             data:{id:<?php echo e($item->u_id); ?>},
             success:function(response){console.log(response);
            // alert("data saved");
             },
             error:function(error){console.log(error);
            // alert("data dont saved");
             } 
         });
}
}


function delete<?php echo e($item->u_id); ?>() {
 
       $.ajax({
             type:'get',
             url:'/user_delete/'+<?php echo e($item->u_id); ?>,
             data:{id:<?php echo e($item->u_id); ?>},
             success:function(response){console.log(response);
              document.getElementById('tr<?php echo e($item->u_id); ?>').style.display ='none';
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

<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/user_display.blade.php ENDPATH**/ ?>