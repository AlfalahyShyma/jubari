
<?php $__env->startSection('main_content'); ?>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  <div class="row">
  <div class="col-12">
  <h1 class="text-center">Supplier Reports</h1>
  
  
  <br>
  <div class="col-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">SupplierReports</li>
            </ol>
  </div>
</div>


<br>

<div class="col-2">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Filter Status
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/supplierRepo">all</a>
      <a class="dropdown-item " href="/supplierRepo/1"> Active</a>
      <a class="dropdown-item " href="/supplierRepo/0">No Active</a>
    </div>

  </div>
</div>

<div class="col-2">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Filter Name 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/supplierRepo">all</a>
      <?php if(count($data)): ?>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <a class="dropdown-item" href="display_rowRepo/<?php echo e($name->s_no); ?>"><?php echo e($name->supplier_name); ?></a>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
    </div>

  </div>
</div>
<div class="col-2">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Filter Service 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/supplierRepo">all</a>
      <a class="dropdown-item " href="/supplierRepo/6"> Ticket Service</a>
      <a class="dropdown-item " href="/supplierRepo/7">Bus Service</a>
      <a class="dropdown-item " href="/supplierRepo/8">Hotel Service</a>
      <a class="dropdown-item " href="/supplierRepo/9">Car Service</a>
      <a class="dropdown-item " href="/supplierRepo/10">Medical Service</a>
      <a class="dropdown-item " href="/supplierRepo/11">Visa Service</a>
      <a class="dropdown-item " href="/supplierRepo/12">General Service</a>
    </div>

  </div> 
</div>
<div class="col-2">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Filter Currency
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/supplierRepo">all</a>
      <a class="dropdown-item " href="/supplierRepo/3"> USD</a>
      <a class="dropdown-item " href="/supplierRepo/4">YER</a>
      <a class="dropdown-item " href="/supplierRepo/5">SAR</a>
    </div>

  </div> 
 
</div>
<div class="col-4">
  
   
     <a type="button" class="btn btn-success" href="/export_excel">Download as Excel file</a>
    
  </div>
</div>
  </div>
<br>
<div class="container">            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Supplier Name</th>
        <th>Mobile</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Account No.</th>
        <th>Services</th>
        <th>Currency</th>
        <th>Remark</th>
        <th>Address</th>
        <th>Is Active</th>
        
        
        
        
       
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td><?php echo e($item->s_no); ?></td>
      <td><?php echo e($item->supplier_name); ?></td>
      <td><?php echo e($item->supplier_mobile); ?></td>
      <td><?php echo e($item->supplier_phone); ?></td>
      <td><?php echo e($item->supplier_email); ?></td>
      <td><img src="<?php echo e(asset('img/suppliers/'.$item->supplier_photo)); ?>" width=40px; hight=40px;></td>
      <td><?php echo e($item->supplier_acc_no); ?></td>
      <td><?php echo e($item->ser_name); ?></td>
      <td><?php echo e($item->cur_name); ?></td>
      <td><?php echo e($item->supplier_remark); ?></td>
      <td><?php echo e($item->supplier_address); ?></td>
      <td><?php echo e($item->is_active); ?></td>
      
        
      </tr>
     
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
</div>
  <?php echo e($data->links()); ?>


  
</div>
  </div>
  </div>
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/supplierRepo.blade.php ENDPATH**/ ?>