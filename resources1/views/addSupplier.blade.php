@extends('app_layouts.master')
@section('main_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet'
    href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'>
<link rel="stylesheet" href="./style.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
  
<h2>Add Supplier Page</h2>

<form id="supplier_display" method="post" action="/add_supplier"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="supplier_name">Supplier Name</label>
      <input type="text" class="form-control" value="{{old('supplier_name')}}" id="supplier_name" placeholder="supplier_name" name="supplier_name">
        <div class="card-body">
      @if($errors->any('supplier_name'))
      <span class="text-danger">
                 {{$errors->first('supplier_name')}}
                
      </span>
      @endif
        </div>
    </div>
    <div class="form-group mb-3">
      <label for="supplier_mobile">Mobile</label>
      <input type="number" class="form-control" id="mobile" placeholder="777777777" name="supplier_mobile">
      <small id="helpId1" class="text-muted"></small>
     
    </div>
    <div class="form-group mb-3">
      <label for="supplier_phone">Phone</label>
      <input type="number" class="form-control"  id="phone" placeholder="444444 " name="supplier_phone">
      <small id="helpId2" class="text-muted"></small>
     
    </div>
    <div class="form-group mb-3">
      <label for="supplier_email">Email</label>
      <input type="email" class="form-control" value="{{old('supplier_email')}}" id="supplier_email" placeholder="supplier_email" name="supplier_email">
      <small id="helpId3" class="text-muted"></small>

    </div>
    <div class="form-group mb-3">
      <label for="supplier_photo">Photo</label>
      <input type="file" class="form-control"  id="supplier_photo" placeholder="supplier_photo" name="supplier_photo">
   
    </div>
    <div class="form-group mb-3">
      <label for="supplier_address">Address</label>
      <input type="text" class="form-control" value="{{old('supplier_address')}}" id="supplier_address" placeholder="supplier_address" name="supplier_address">
    
    </div>
    <div class="form-group mb-3">
      <label for="supplier_acc_no">Supplier Account No.</label>
      <input type="number" class="form-control" value="{{old('supplier_acc_no')}}" id="supplier_acc_no" placeholder="supplier_acc_no" name="supplier_acc_no">
     
    </div>
    
    <div class="form-group mb-3">
    <label for="supplier_service">Service</label>
    <select class="form-control col-2   mx-5 d-inline-block select2" name="supplier_service[]" multiple="multiple" id="dropselect" placeholder="select service" style="width: 100%;">
    <option value="">select service</option>
                @if(count($data1))
                      @foreach($data1 as $service)

                      <option  value="{{$service->ser_id}}">{{$service->ser_name}}</option>

                      @endforeach
                  @endif
              
                  
                </select>
                </div>
               
                
    <div class="form-group mb-3">
      <label for="supplier_remark">Remark</label>
      <textarea class="form-control" name="supplier_remark" id="supplier_remark"></textarea>
    </div>
    <div class="form-group mb-3">
      <label for="supplier_currency">Select currency</label>
     <select class="form-control col-2   mx-5 d-inline-block select2" multiple="multiple" name="supplier_currency[]" id="">
     <option value="" disabled>select currency</option>
                @if(count($data2))
                      @foreach($data2 as $cur)

                      <option  value="{{$cur->cur_id}}">{{$cur->cur_name}}</option>

                      @endforeach
                  @endif
              
                  
                </select>
    <!-- @if($errors->any('is_active'))
      <span class="text-danger">{{$errors->first('is_active')}}</span>
      @endif -->
    </div>
    <div class="form-group mb-3">
      <label for="is_active">is_active</label>
     <select class="form-control col-2 mx-5 d-inline-block select2" name="is_active" id="">
     <option value=1>1</option>
     <option value=0>2</option>
     
     </select>
     @if($errors->any('is_active'))
      <span class="text-danger">{{$errors->first('is_active')}}</span>
      @endif
    </div>
   
    <button type="submit" class="btn btn-primary">send</button>
   
  </form> 
  
  </div>
  </div> 
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
    crossorigin="anonymous"></script>
  <script>
    $('#supplier_display').on('submit',function(e){
         e.preventDefault();
         $.ajax({
             type:'post',
             url:'/addSupplier',
             data:$('#supplier_display').serialize(),
             success:function(response){console.log(response);
             alert("data saved");
             },
             error:function(error){console.log(error);
             alert("data dont saved");
             } 
         });

    });




    var sub = document.getElementById("sub");
    var phone = document.getElementById("phone");
    var mobile = document.getElementById("mobile");
    var email = document.getElementById("email");
var mass1 = document.getElementById("helpId1");
var mass2 = document.getElementById("helpId2");
var mass3 = document.getElementById("helpId3");

var phoneNumber = "^[0-9]{6}$";
var mobileNumber = "^[0-9]{9}$";
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;






phone.addEventListener("keyup", function confirmName() {

    if (phone.value.match(phoneNumber)) {
      phone.style.borderColor = "green";
        return true;
    }
    else {
        mass2.innerHTML = "*Enter field Name ";
        phone.style.borderColor = "red";
        return false;
    }
});
mobile.addEventListener("keyup", function confirmName() {

if (mobile.value.match(mobileNumber)) {
  mobile.style.borderColor = "green";
    return true;
}
else {
    mass1.innerHTML = "*Enter field Number Mobile  ";
    mobile.style.borderColor = "red";
    return false;
}
});
  </script>
  
  @endsection


