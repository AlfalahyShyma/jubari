
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JUBARI_TRAVEL SYSTEM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/fontawesome-free/css/all.min.css")); ?>">
  <!-- Theme style -->
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/select2/css/select2.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")); ?>">
 
  <link rel="stylesheet" href="<?php echo e(asset("assets/css/adminlte.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/css/ourstyle.css")); ?>">
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('6883c49c6bc80e6506a0', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('sss');
    channel.bind('sss', function(data) {
      if(data.id==<?php echo e(Auth::user()->id); ?>){
     var n_body=$("#notify_body");
     var n_mess=JSON.stringify(data.mass);
      n_body.prepend(n_mess);
     var fi =document.getElementById('counter_notify').innerHTML;
             fi++
            document.getElementById('counter_notify').innerHTML = fi; 
      alert(JSON.stringify(data.id+data.mass));
     // console.log(JSON.stringify(data.mass));
    }
    });
  </script>
  
</head>
<body class="hold-transition sidebar-mini" onload="">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



  <?php echo $__env->yieldContent('main_content'); ?>

  <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 



  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset("assets/plugins/jquery/jquery.min.js")); ?>"></script>

<script src="<?php echo e(asset("assets/js/pages/dashboard2.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/select2/js/select2.full.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset("assets/js/adminlte.min.js")); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset("assets/js/demo.js")); ?>"></script>
<script>
$(document).ready(function(){
  var get_image=<?php echo e(Auth::user()->id); ?>;
  
  $.ajax({
url:'/user_profile/'+get_image,
type:'get',
dataType:'json',
success:function(response){
  if(response.length==0){
    console.log("not found thing");
  }else{
    console.log(response[0]);
   // alert(response[0].e_photo);
    var img=response[0].e_photo;
    var name=response[0].ef_name +' '+response[0].em_name;
   $('#su_user_image').html('<img src="img/users/'+img+'"  class="img-circle elevation-2" alt="User Image">');
   $('#su_user_name').text(name);
   }
}
});

  var user_id= <?php echo e(Auth::user()->id); ?>;
$.ajax({
url:'/adds_user_display_u/'+user_id,
type:'get',
dataType:'json',
success:function(response){

  if(response.length==0){
    console.log("not found thing");
  }else{
    console.log(response[0]);
    //alert("yyyy"+response[0].au_id);
    $('#myModalss').modal('show');
   $('#bbsize').html('<div class=card bg-dark id=card'+response[0].au_id+'><div class="card-body">'+response[0].a_text+'</div><div class="card-footer text-center"><div class="btn-group"><button onclick="ok('+response[0].au_id+')" type="button" class="btn btn-success">ok</button><button type="button" onclick="cansel('+response[0].au_id+')" class="btn btn-danger">cansel</button></div></div></div>');
  
      }
}
});

var uuser_iid=<?php echo e(Auth::user()->id); ?>;
  
  $.ajax({
url:'/notify_count/'+uuser_iid,
type:'get',
dataType:'json',
success:function(response){
  if(response.length==0){
    console.log("not found thing");
  }else{
  $('#counter_notify').text(response[0].count );
   }
}
});

$.ajax({
url:'/user_notify/'+uuser_iid,
type:'get',
dataType:'json',
success:function(response){
  if(response.length==0){
    console.log("not found thing");
  }else{
    $.map(response ,function(k,v){
                  console.log(k.id);
                  for(var i in k){
                    console.log(k[i].id);
                  }
                  $('#notify_body').prepend(k.body);

});
   }
}
});
})
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
    </script>
       
</body>
</html>
<?php /**PATH C:\wamp\www\jubari_travel-trainning\resources\views/app_layouts/master.blade.php ENDPATH**/ ?>