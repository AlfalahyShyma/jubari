
<?php $__env->startSection('main_content'); ?>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  <div class="row">
  <div class="col-12">
  <h1 class="text-center">display airline</h1>
  </div>
  
<div class="container">            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>airline_code</th>
        <th>name</th>
        <th>country</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr id="tr<?php echo e($item->id); ?>" >
      <td><?php echo e($item->airline_code); ?></td>
      <td><?php echo e($item->airline_name); ?></td>
      <td><?php echo e($item->country); ?></td>
        <td>
        <div class="btn-group btn-group-sm">
  <a type="button" class="btn btn-success" href="airline_edit/<?php echo e($item->id); ?>"><i class="fas fa-pencil-alt "></i></a>
  <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalair<?php echo e($item->id); ?>" ><i class="fas fa-trash "></i></a>
</div>
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
      <div class="row text-center"><div class="col-12 p-4"><i style="font-size: 70px;" class="fas fa-exclamation-circle text-center text-danger"></i></div><div class="col-12 p-3"><h3 class="text-center">are you sure you want to delete airline??</h3></div><div class="col-12 p-2"><button type="button" class="btn btn-success" data-dismiss="modal" >cansel</button><button type="button" class="btn btn-danger" onclick="delete<?php echo e($item->id); ?>()" style="width:15%;">ok</button></div></div>
      </div>
   </div>
  </div>
</div>
        </td>
      </tr>
      <script>
      
function delete<?php echo e($item->id); ?>() {
 
 $.ajax({
       type:'get',
       url:'/airline_delete/'+<?php echo e($item->id); ?>,
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

<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/airline_display.blade.php ENDPATH**/ ?>