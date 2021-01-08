
<?php $__env->startSection('main_content'); ?>

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <h5 class="mb-2">     </h5>
        
        <div class="row">
        <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">ticket service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/ticket">review
                  <span>
                    <?php $__currentLoopData = $tic1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($t1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/ticket/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $tic2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($t2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
              </div>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag" ></i></span>
              <div class="info-box-content">
                <span class="info-box-text">car service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/car">review
                  <span>
                    <?php $__currentLoopData = $car1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($c1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/car/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $car2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($c2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">bus service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/bus">review
                  <span>
                    <?php $__currentLoopData = $bus1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($b1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/bus/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $bus2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($b2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag "></i></span>
              <div class="info-box-content">
                <span class="info-box-text">medical service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/medical">review
                  <span>
                    <?php $__currentLoopData = $med1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($m1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/medical/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $med2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($m2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">visa service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/visa">review
                  <span>
                    <?php $__currentLoopData = $vis1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($v1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
</a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/visa/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $vis2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($v2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag "></i></span>

              <div class="info-box-content">
                <span class="info-box-text">general service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn"  href="/accountant_review/general">review
                  <span>
                    <?php $__currentLoopData = $gen1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($g1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/general/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $gen2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($g2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon su_icon"><i class="far fa-flag "></i></span>

              <div class="info-box-content">
                <span class="info-box-text">hotel service</span>
                <div class="row">
                <a class="btn btn-info su_acc_btn" href="/accountant_review/hotel">review
                  <span>
                    <?php $__currentLoopData = $hot1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($h1->accountant); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
                <a class="btn btn-success su_acc_btn" href="/accountant_finish/hotel/<?php echo e(Auth::user()->id); ?>">finished
                <span>
                    <?php $__currentLoopData = $hot2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($h2->finish); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </span>
                </a>
              </div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          </div>
          <div class="row">
         
          <div class="col-12">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest ticket</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>type </th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>                      
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</section>
</div>
</div>

  
  
  
  
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/accountant_view.blade.php ENDPATH**/ ?>