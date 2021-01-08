
<?php $__env->startSection('main_content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>edit customer </h2>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo e($er); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--form action="airline_display1" method="post"-->
<form id="airline_edit9" method="post" action="/addcustomer" >
<div class="row">
  
    <div class="form-group col-md-6">
      <label for="pwd">	name:</label>
      <input type="text" value="" required  class="form-control"  name="cus_name">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">account_number:</label>
      <input type="number" value="" required class="form-control" name="cus_account">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">	contact_person:</label>
      <input type="text" value="" required  class="form-control"  name="contact_person">
      <input type="text" hidden="hidden" value="<?php echo e(Auth::user()->id); ?>" class="form-control" id="how_create_it" placeholder="how_create_it" name="how_create_it">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">contact_title:</label>
      <input type="text" value="" required class="form-control" name="contact_title">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">telephon_1:</label>
      <input type="text" value=""  class="form-control"  name="telephon1">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">telephon_2</label>
      <input type="text" value="" required class="form-control"  name="telephon2">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">fax_1</label>
      <input type="text" value="" required class="form-control" name="fax1">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">fax_2</label>
      <input type="text" value="" required class="form-control" name="fax2">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">	whatsapp</label>
      <input type="text" value="" required class="form-control"  name="whatsapp">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">email</label>
      <input type="text" value="" required  class="form-control"  name="cus_email">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">	address</label>
      <input type="text" value="" required  class="form-control" name="address">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">city</label>
      <input type="text" value="" required  class="form-control"  name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">country</label>
      <input type="text" required value=""  class="form-control" name="country">
    </div>
    <div class="form-group col-md-4">
      <label for="is_active">is_active</label>
     <select name="is_active" required class="form-control" id="">
     <option value=1>yes</option>
     <option value=0>no</option>
     </select>
    </div>
    <div class="form-group col-md-4">
      <label for="is_active">VIP</label>
     <select required name="vip" class="form-control" id="">
     <option value=1>yes</option>
     <option value=0>no</option>
     </select>
    </div>

    <div class="form-group col-md-4">
      <label for="is_active">def_currency</label>
     <select required name="def_currency" class="form-control" id="">
     <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($item1->cur_id); ?>"><?php echo e($item1->cur_name); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </select>
    </div>
   
   </div>
   <button type="submit" class="btn btn-primary">send</button>
   <a href="/customer_display" class="btn btn-dark">cansel</a>
  

  </form>  
  

  </div>
  </div>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/customer_add.blade.php ENDPATH**/ ?>