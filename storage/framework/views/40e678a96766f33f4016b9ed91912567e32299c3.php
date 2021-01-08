
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>add user page</h2>
<!--form action="airline_display1" method="post"-->
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo e($er); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form  method="post" action="/adduser" >
<?php echo csrf_field(); ?>
<div class=row>
<div class="form-group mb-3 col-md-6 col-sm-12">
      <label for="is_active">department</label>
     <select class="form-control" name="dept" onchange="dep_selecty()" id="department">
     <option class="" >choice department</option>
     <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($item1->id); ?>"><?php echo e($item1->name); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </select>
    </div>
    <div class="form-group mb-3 col-md-6 col-sm-12">
      <label for="is_active">choese employee</label>
     <select class="form-control" onchange="emp_selecty()" name="emp_id" id="emp">
    
     </select>
    </div>
    </div>
    <div class=row id='user_data'>
    
    </div>
    <?php
   
    ?>
    <div class="form-group mb-3">
      <label for="is_active">is_active</label>
     <select class="form-control" name="is_active" id="">
     <option value=1>yes</option>
     <option value=0>no</option>
     </select>
    </div>
    <input type="text" hidden="hidden" value="<?php echo e(Auth::user()->id); ?>" class="form-control" id="how_create_it" placeholder="how_create_it" name="how_create_it">

    <div class="form-group">
    <label>select roles</label>

    <div class="checkbox">
    <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item33): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <label><input type="checkbox" name="role[]" value="<?php echo e($item33->id); ?>"><?php echo e($item33->name); ?></label>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
   
    <button type="submit" class="btn btn-primary">add user</button>
   
  </form>  

  <script>
       function dep_selecty(){
       var i= $('#department').val();
       $('#emp').html(' ');
$.ajax({
             type:'get',
             dataType:'json',
             url:'/employee_dept/'+i,
             data:{id:i},
             success:function(response){
               $('#emp').append('<option value="0">select employee</option>');
               $.map(response ,function(k,v){
                  console.log(k.emp_id);
                  for(var i in k){
                    console.log(k[i].emp_id);
                  }
                  
                  $('#emp').append('<option value="'+k.emp_id+'">'+k.emp_first_name+' '+k.emp_middel_name+'</option>');

               });
                
              },
             error:function(error){console.log(error);
            alert("data dont saved");
             } 
         });
       }
       function emp_selecty(){
         
       var i= $('#emp').val();
       $.ajax({
             type:'get',
             dataType:'json',
             url:'/employee_data/'+i,
             data:{id:i},
             success:function(response){
               console.log(response);
            $('#user_data').html('<div class="form-group mb-3 col-md-6 col-sm-12"> <label for="pwd">user_name</label><input type="text" class="form-control" id="" value="'+response[0].emp_first_name+' '+ response[0].emp_middel_name+'" name="name" readonly></div> <div class="form-group mb-3 col-md-6 col-sm-12"><label for="adds_text">user_email</label><input type="email" class="form-control" id="" value="'+response[0].emp_email+'" name="email" readonly><input type="text" class="form-control" id="" value="'+response[0].emp_id+'" name="u_id" hidden=hidden></div>');
     },
             error:function(error){console.log(error);
            alert("data dont saved");
             } 
         });
       }

    </script>

  </div>
  </div>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/user_add.blade.php ENDPATH**/ ?>