
<?php $__env->startSection('main_content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  <div class="row">
  <div class="col-10">
  <h1 class="text-center">display user roles</h1>
  </div>
  <div class="col-2">
  <a type="button" href="/add_role_user" class="btn btn-secondary">add role to user</a>
</div>
  </div>


<div class="container">            
  <table class="table table-striped" >
    <thead>
      <tr>
        <th>#</th>
        <th>user_name</th>
        <th>roles</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr id="tr<?php echo e($item->u_id); ?>" >
      <td><?php echo e($item->u_id); ?></td>
      <td><?php echo e($item->u_name); ?></td>
      <td id="td<?php echo e($item->u_id); ?>">
   
      </td>
        <td >
        <div class="btn-group btn-group-sm">
  <a type="button" class="btn btn-danger"  onclick="delete<?php echo e($item->u_id); ?>()" ><i class="fas fa-trash "></i></a>
</div>
        </td>
      </tr>
      <script>

function delete<?php echo e($item->u_id); ?>() {
 
       $.ajax({
             type:'get',
             url:'/user_role_delete/'+<?php echo e($item->u_id); ?>,
             data:{u_id:<?php echo e($item->u_id); ?>},
             success:function(response){console.log(response);
              document.getElementById('tr<?php echo e($item->u_id); ?>').style.display ='none';
             },
             error:function(error){console.log(error);
             } 
         });
  } 
  function kk<?php echo e($item->u_id); ?>() {
   document.getElementById('td<?php echo e($item->u_id); ?>').innerHTML="LLL";

   var user_id= <?php echo e(Auth::user()->id); ?>;
$.ajax({
url:'/adds_user_display_u/11',
type:'get',
dataType:'json',
success:function(response){

  if(response.length==0){
    console.log("not found thing");
  }else{
    console.log(response[0]);
    $('#myModalss').modal('show');
   $('#bbsize').html('<div class=card bg-dark id=card'+response[0].au_id+'><div class="card-body">'+response[0].a_text+'</div><div class="card-footer text-center"><div class="btn-group"><button onclick="ok('+response[0].au_id+')" type="button" class="btn btn-success">ok</button><button type="button" onclick="cansel('+response[0].au_id+')" class="btn btn-danger">cansel</button></div></div></div>');
  
      }
}
});
} 
kk<?php echo e($item->u_id); ?>();
</script>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  
</div>
  </div>
  </div>
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/role_user_display.blade.php ENDPATH**/ ?>