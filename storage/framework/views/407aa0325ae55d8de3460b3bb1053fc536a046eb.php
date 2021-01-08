
<?php $__env->startSection('main_content'); ?>
<style>
.widget-user .widget-user-image > img {
    border: 3px solid #fff;
    height: 100px;
    width: 120px;
}
.colored{
  background-color: rgb(8, 2, 49) !important;

}
</style>

<div class="content-wrapper" >
<div class="row m-2">
<div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/ticket')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Ticket Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/20945753.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_ticket); ?></h5>
                      <a  href="<?php echo e(url('/service/show_ticket/1')); ?>">
                      <span class="text-dark">Saved</span>
                    </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_ticket); ?></h5>
                      <a  href="<?php echo e(url('/service/show_ticket/2')); ?>">
                      <span class="text-dark">Sent</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_ticket); ?></h5>
                      <a  href="#">
                      <span class="text-dark">Archived</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
         

          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/bus')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Bus Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/5282.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_bus); ?></h5>
  <a  href="<?php echo e(url('/service/show_bus/1')); ?>">
                      <span class="text-dark">Saved</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_bus); ?></h5>
  <a  href="<?php echo e(url('/service/show_bus/2')); ?>">
                      <span class="text-dark">Sent</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_bus); ?></h5>
  <a  href="#">
                      <span class="text-dark">Archived</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/hotel')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Hotel Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/10811.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_hotel); ?></h5>
  <a  href="<?php echo e(url('/service/show_hotel/1')); ?>">
                      <span class="text-dark">Saved</span>
                      </a>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_hotel); ?></h5>
  <a  href="<?php echo e(url('/service/show_hotel/2')); ?>">
                      <span class="text-dark">Sent</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_hotel); ?></h5>
  <a  href="#">
                      <span class="text-dark">Archived</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
   </div>

   <div class="row m-2">
<div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/visa')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Visa Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/11006.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_visa); ?></h5>
  <a  href="<?php echo e(url('/service/show_visa/1')); ?>">
                      <span class="text-dark">Saved</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_visa); ?></h5>
  <a  href="<?php echo e(url('/service/show_visa/2')); ?>">
                      <span class="text-dark">Sent</span>
                   </a> </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_visa); ?></h5>
  <a  href="#">
                      <span class="text-dark">Archived</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
         

          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/car')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Car Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/8655.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_car); ?></h5>
  <a  href="<?php echo e(url('/service/show_car/1')); ?>">
                      <span class="text-dark">Saved</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_car); ?></h5>
  <a  href="<?php echo e(url('/service/show_car/2')); ?>">
                      <span class="text-dark">Sent</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_car); ?></h5>
  <a  href="#">
                      <span class="text-dark">Archived</span>
                      </a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/medical')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">Medical Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/6301.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_med); ?></h5>
  <a  href="<?php echo e(url('/service/show_medical/1')); ?>">
                      <span class="text-dark">Saved</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_med); ?></h5>
  <a  href="<?php echo e(url('/service/show_medical/2')); ?>">
                      <span class="text-dark">Sent</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_med); ?></h5>
  <a  href="#">
                      <span class="text-dark">Archived</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
   </div>
   
   <div class="row m-2">
<div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user ">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white colored" >
            <a class="btn  col-2 float-left p-2" href="<?php echo e(url('/service/general')); ?>">  <i class="fa fa-plus text-white" aria-hidden="true"></i></a>
                <h3 class="widget-user-username text-right">General Service</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo e(asset('img/images/6340.jpg')); ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($save_service); ?></h5>
  <a  href="<?php echo e(url('/service/show_general/1')); ?>">
                      <span class="text-dark">Saved</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($sent_service); ?></h5>
  <a  href="<?php echo e(url('/service/show_general/2')); ?>">
                      <span class="text-dark">Sent</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo e($archev_service); ?></h5>
  <a  href="#">
                      <span class="text-dark ">Archived</span></a>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div></div>
   </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/sales-wedgate.blade.php ENDPATH**/ ?>