
<?php $__env->startSection('main_content'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php if(session('status')): ?>
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('status')); ?>

  </div>
  <?php elseif(session('failed')): ?>
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('failed')); ?>

  </div>
  <?php endif; ?>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Bus Service</h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->

  <!-- /.content -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-3  d-inline-block">BUS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="datatable" class="table table-responsive table-hover text-nowrap text-center">


                  <form method="post">
                    <?php echo csrf_field(); ?>

                    <thead>
                      <tr>
                        <th><input type="checkbox" class="selectall"></th>
                        <th>ID</th>
                        <th>Issue Date </th>
                        <th> Refernce </th>
                        <th>Passenger Name</th>
                        <th>Bus Name </th>
                        <th>Bus Number </th>
                        <th>Bus Status </th>
                        <th>Dept City </th>
                        <th> Dept Date </th>
                        <th> Arr City </th>
                        <th>Supplier</th>
                        <th>Supplier Cost</th>
                        <th>Supplier Cuurency</th>
                        <th>Passenger Cost </th>
                        <th>Passenger Currency </th>
                        <th>Remark</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="row2">
                      <?php $i=1 ?>

                      <?php $__empty_1 = true; $__currentLoopData = $bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                      <tr>
                        <td><input type="checkbox" name="ids[]" class="selectbox" value="<?php echo e($buss->bus_id); ?>"></td>
                        <input type="hidden" class="delete_id" value="<?php echo e($buss->bus_id); ?>">
                        <td>
                          <?php echo $i;?>
                        </td>
                        <td><?php echo e($buss->Issue_date); ?></td>
                        <td> <?php echo e($buss->refernce); ?> </td>
                        <td><?php echo e($buss->passenger_name); ?></td>
                        <td><?php echo e($buss->bus_name); ?></td>
                        <td><?php echo e($buss->bus_number); ?> </td>
                        <?php if($buss->bus_status==1): ?>
                        <td>OK</td>
                        <?php endif; ?>
                        <td><?php echo e($buss->Dep_city); ?> </td>
                        <td> <?php echo e($buss->dep_date); ?> </td>
                        <td> <?php echo e($buss->arr_city); ?> </td>
                        <td><?php echo e($buss->supplier_name); ?> </td>
                        <td><?php echo e($buss->provider_cost); ?> </td>
                        <td><?php echo e($buss->cur_name); ?></td>
                        <td><?php echo e($buss->cost); ?> </td>
                        <td> <?php echo e($buss->passnger_currency); ?> </td>
                        <td><?php echo e($buss->remark); ?> </td>
                        <td>
                          <?php if($buss->service_status==1): ?>
                          <a type="button" class="btn sendbtn btncolor text-white"><i class="fa fa-paper-plane"
                              aria-hidden="true"></i></a>
                          <a class="btn btncolor" type="button"
                            href="<?php echo e(url('/service/update_bus/'.$buss->bus_id)); ?>"><i class="fa fa-pencil-alt"
                              aria-hidden="true"></i></a>
                          <a type="button" class="btn  deletebtn btncolor text-white"><i class="fas fa-trash "></i></a>
                          <?php endif; ?>

                        </td>
                      </tr>
                    <tfoot>
                    
                      </tbody>
                    </tfoot>
                    <?php $i++ ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                      <td colspan="10">There is No data Pleas Add Service
                      <td>
                    </tr>
                    <?php endif; ?>
  <tr>
                        <button formaction="/deleteallbus" type="submit"
                          class="btn btn-danger float-left p-2 m-3">Delete All Selected</button>
                        <button formaction="/sendallbus" type="submit" class="btn btncolor float-right p-2 m-3">Send All
                          Selected</button>
                      </tr>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <?php echo e($bus->links()); ?>

            </form>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.container-fluid -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $('.selectall').click(function () {
        $('.selectbox').prop('checked', $(this).prop('checked'));
        $('.selectall2').prop('checked', $(this).prop('checked'));
      })

      $('.selectbox').change(function () {
        var total = $('.selectbox').length;
        var number = $('.selectbox:checked').length;
        if (total == number) {
          $('.selectall').prop('checked', true);
          $('.selectall2').prop('checked', true);
        } else {
          $('.selectall').prop('checked', false);
          $('.selectall2').prop('checked', false);
        }
      })
      console.log('inseode scripy');

      $(document).ready(function () {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $('.deletebtn').click(function (e) {
          e.preventDefault();
          var id = $(this).closest("tr").find('.delete_id').val();
          console.log(id);

          //alert(id);
          swal({
            title: "Are you sure?",
            text: "Are You  Sure to delete this Service!",
            icon: "error",
            buttons: true,
            dangerMode: true,
          })
            .then((willDelete) => {
              if (willDelete) {
                var data = {
                  '_token': $('input[name=_token]').val(),
                  'id': id,
                };

                $.ajax({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type: "GET",
                  url: '/service/bus_delete/' + id,
                  data: data,
                  success: function (response) {
                    console.log(response);
                    swal("Delete Successfully", {
                      icon: "success",
                    }).then((willDelete) => {
                      location.reload();
                    });
                  }
                });
              }


            });
        });

        $('.sendbtn').click(function (e) {
          e.preventDefault();
          var id = $(this).closest("tr").find('.delete_id').val();
          console.log(id);

          //alert(id);
          swal({
            title: "Are you sure?",
            text: "Do you want send this Service!",
            icon: "success",
            buttons: true,
            dangerMode: true,
          })
            .then((willDelete) => {
              if (willDelete) {
                var data = {
                  '_token': $('input[name=_token]').val(),
                  'id': id,
                };

                $.ajax({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type: "GET",
                  url: '/service/bus_send/' + id,
                  data: data,
                  success: function (response) {
                    // cartdata=response;
                    //console.log('cartdata');
                    console.log(response[0]);

                    if (response[0] == '<') {
                      swal("Send Successfully", {
                        icon: "success",
                      }).then((willDelete) => {
                        location.reload();
                      });
                    }
                    else {
                      swal("upload file before", {
                        icon: "error",
                      }).then((willDelete) => {
                        location.reload();
                      });


                    }
                  }
                });
              }


            });
        });

      });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('app_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/show_bus.blade.php ENDPATH**/ ?>