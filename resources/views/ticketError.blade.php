@extends('app_layouts.master')
@section('main_content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container p-4">
    <!-- Main content -->
    <div class="col-12 ">
      <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a  class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill"
                href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                aria-selected="true">Ticket</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/displaySalesManager" role="tab">Bus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/displaySalesManager/HotelError" role="tab">Hotel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/displaySalesManager/CarError" role="tab">Car</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/displaySalesManager/VisaError" role="tab">Via</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/displaySalesManager/MedError" role="tab">Medical</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/displaySalesManager/GenError" role="tab">General</a>
            </li>
          </ul>
        </div>
        <div class="card-body">

          <div class="tab-pane fade active show" id="custom-tabs-four-profile" role="tabpanel"
            aria-labelledby="custom-tabs-four-profile-tab">
            <div class="card">
              <div class="card-header border-transparent">
                <!--  start add Modal -->
                <div class="modal fade" id="add2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" action="" id="addForm">
                          @csrf
                          <div class="card-body">
                            <div class="form-group row">

                              <div class="col-md-12 m-2">

                                <input type="hidden" class="form-control" id="tecket_id" name="tecket_id">
                                <input type="hidden" class="form-control" id="ticket_remark_id" name="remark_id" required>
                                <input type="hidden" class="form-control" id="ticket_service_id" name="service_id"
                                  required>
                                <input type="hidden" class="form-control" id="ticket_emp_id" name="emp_id" required>
                                <input type="hidden" class="form-control" id="ticket_number10" name="emp_id" required>

                                <input type="checkbox" name="remark[]" id="issue_date1" class="col-sm-1  d-inline-block"
                                  onclick="myFunction()"> Issue Date : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="issue_val" readonly>
                                <input type="text" class="form-control  col-11" style="display:none; width:100%"
                                  name="issue_date" value="null" id="issue_date" />
                              </div>
                              <div class="col-md-12 m-2">
                                <input type="checkbox" name="remark[]" value="issue_date" id="refernce2"
                                  onclick="myFunction2()"> Refernce : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="refernce_val"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="issue_date" id="refernce" value="null" />
                              </div>
                              <div class="col-md-12 m-2">
                                <input type="checkbox" name="remark[]" id="passenger_name2"
                                  onclick="myFunction3()">Passenger Name : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="passnger_name_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="passenger_name" value="null" id="passenger_name" />


                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="ticket_number2"
                                  onclick="myFunction5()">ticket Number : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="ticket_number_val"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="ticket_number" value="null" id="ticket_number3" />
                              </div>
                              <div class="col-md-12 m-2">


                                <input type="checkbox" name="remark[]" id="ticket_status2" onclick="myFunction4()"> ticket
                                Status : <input class="form-control col-md-6 d-inline-block m-2" type="text"
                                  id="ticket_status_val" readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="ticket_status" value="null" id="ticket_status" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="ticket_name2"
                                  onclick="myFunction9()">Ariline  : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="ticket_name_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="ticket_name" value="null" id="ticket_name" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="Dep_city2"
                                  onclick="myFunction6()">Dep City : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="Dep_city_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="Dep_city" value="null" id="Dep_city" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="arr_city2"
                                  onclick="myFunction7()">Arr City :<input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="arr_city_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="arr_city" value="null" id="arr_city" />


                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="dep_date2"
                                  onclick="myFunction8()">Dep Date : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="dep_date_val"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="dep_date" value="null" id="dep_date" />
                              </div>

                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="Dep_city22"
                                  onclick="myFunction26()">Dep City2 : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="Dep_city_val22"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="Dep_city" value="null" id="Dep_city23" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="arr_city22"
                                  onclick="myFunction27()">Arr City2 :<input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="arr_city_val22"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="arr_city" value="null" id="arr_city23" />


                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="dep_date22"
                                  onclick="myFunction28()">Dep Date2 : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="dep_date_val22"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="dep_date" value="null" id="dep_date23" />
                              </div>

                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="bursher_time1"
                                  onclick="myFunction29()">Busher Time : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="bursher_time2"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="bursher_time" value="null" id="bursher_time3" />
                              </div>

                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="due_to_supp2"
                                  onclick="myFunction10()">Provider Name: <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="supplier_name_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="due_to_supp" value="null" id="due_to_supp" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="provider_cost2"
                                  onclick="myFunction11()">Provider Cost: <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="provider_cost_val"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="provider_cost" value="null" id="provider_cost" />


                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="cur_id2"
                                  onclick="myFunction12()"> Provider Currency : <input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="cur_name_val"
                                  readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="cur_id" value="null" id="cur_id" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="due_to_customer2"
                                  onclick="myFunction13()">Employee Name :<input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="employee2_val2"
                                  readonly>
                                <input type="text" class="form-control col-11" style="display:none; width:100%"
                                  name="due_to_customer" value="null" id="due_to_customer" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="cost2"
                                  onclick="myFunction14()">Customer Cost :<input
                                  class="form-control col-md-6 d-inline-block m-2" type="text" id="cost_val" readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="cost" value="null" id="cost" />
                              </div>
                              <div class="col-md-12 m-2"> <input type="checkbox" name="remark[]" id="passnger_currency2"
                                  class="" onclick="myFunction15()">Customer Currency:<input
                                  class="form-control col-md-6 d-inline-block m-2" type="text"
                                  id="passnger_currency_val" readonly>
                                <input type="text" class="form-control col-11 " style="display:none; width:100%"
                                  name="passnger_currency" value="null" id="passnger_currency" />



                              </div>
                            </div>
                          </div>


                      </div>
                      <!-- /.card-body -->

                      <!-- /.card-footer -->
                      </form>
                      <div class="modal-footer">
                        <a href=""><button type="button" class="btn btn-secondary   m-3 p-2 float-left"
                            data-dismiss="modal">Close</button></a>
                        <a id="save"> <button type="button" class="btn btncolor m-3 p-2 float-right">Save
                            changes</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                      <th>ID</th>
                        <th>Type</th>
                        <th>Issue Date </th>
                        <th> Refernce </th>
                        <th>Passenger Name</th>
                        <th>Airline Code</th>
                        <th>Ticket Number </th>
                        <th>Dept City </th>
                        <th> Dept Date </th>
                        <th> Arr City </th>
                        <th>Dept City2 </th>
                        <th> Dept Date2 </th>
                        <th> Arr City2 </th>
                        <th>Busher Time</th>
                        <th>Supplier</th>
                        <th>Supplier Cost</th>
                        <th>Supplier Cuurency</th>
                        <th>Passenger Cost </th>
                        <th>Passenger Currency </th>
                        <th>Ticket Status </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1 ?>
                      @foreach($data as $item)
                      <tr>
                        <input type="hidden" class="ticket_number" value="{{$item->ticket_number}}">
                        <input type="hidden" class="id" value="{{$item->tecket_id}}">
                        <input type="hidden" class="emp_id" value="{{$item->emp_id}}">
                        <input type="hidden" class="service_id" value="{{$item->service_id}}">
                        <input type="hidden" class="issue_val2" value="{{$item->Issue_date}}">
                        <input type="hidden" class="refernce_val2" value="{{$item->refernce}}">
                        <input type="hidden" class="passenger_name_val2" value="{{$item->passenger_name}}">
                        <input type="hidden" class="ticket_status_val2" value="OK">
                        <input type="hidden" class="ticket_number_val2" value="{{$item->ticket_number}}">
                        <input type="hidden" class="Dep_city_val2" value="{{$item->Dep_city}}">
                        <input type="hidden" class="arr_city_val2" value="{{$item->arr_city}}">
                        <input type="hidden" class="dep_date_val2" value="{{$item->dep_date}}">
                        
                        <input type="hidden" class="Dep_city_val22" value="{{$item->Dep_city2}}">
                        <input type="hidden" class="arr_city_val22" value="{{$item->arr_city2}}">
                        <input type="hidden" class="dep_date_val22" value="{{$item->dep_date2}}">
                        <input type="hidden" class="bursher_time" value="{{$item->bursher_time}}">
                        <input type="hidden" class="ticket_name_val2" value="{{$item->airline_name}}">
                        <input type="hidden" class="supplier_name_val2" value="{{$item->supplier_name}}">
                        <input type="hidden" class="provider_cost_val2" value="{{$item->provider_cost}}">
                        <input type="hidden" class="cur_name_val2" value="{{$item->cur_name}}">
                        <input type="hidden" class="employee_val2"
                          value="{{$item->emp_first_name}} {{$item->emp_middel_name}} {{$item->emp_thired_name}} {{$item->emp_lastst_name}}">
                        <input type="hidden" class="cost_val2" value="{{$item->cost}}">
                        <input type="hidden" class="passnger_currency_val2" value="{{$item->passnger_currency}}">
                        <input type="hidden" class="remark_id" value="{{Auth::user()->id}}">
                        <td>
                          <?php echo $i;?>
                        </td>
                        @if($item->Dep_city2==null)
                        <td> One Way</td>
                        @else
                        <td> Rounded Way</td>
                        @endif

                        <td>{{$item->Issue_date }}</td>
                        <td> {{$item->refernce}} </td>
                        <td>{{$item->passenger_name}}</td>
                        <td>{{$item->airline_name}}</td>
                        <td>{{$item->ticket_number}} </td>
                        <td>{{$item->Dep_city}} </td>
                        <td> {{$item->dep_date}} </td>
                        <td> {{$item->arr_city}} </td>
                        @if($item->Dep_city2==null)
                        <td>--</td>
                        @else
                        <td> {{$item->Dep_city2}} </td>
                        @endif
                        @if($item->dep_date2==null)
                        <td>--</td>
                        @else
                        <td> {{$item->dep_date2}} </td>
                        @endif
                        @if($item->arr_city2==null)
                        <td>--</td>
                        @else
                        <td> {{$item->arr_city2}} </td>
                        @endif
                        @if($item->bursher_time==null)
                        <td>--</td>
                        @else
                        <td> {{$item->bursher_time}} </td>
                        @endif
                        <td>{{$item->supplier_name}} </td>
                        <td>{{$item->provider_cost}} </td>
                        <td>{{$item->cur_name}}</td>
                        <td>{{$item->cost}} </td>
                        <td> {{$item->passnger_currency}} </td>
                        @if($item->ticket_status==1)
                        <td>OK</td>
                        @endif
                        <td>
                          <a class="btn sendbtn btncolor text-white"><i class="fa fa-paper-plane"
                              aria-hidden="true"></i></a>
                          <a class="btn btncolor text-white add"> <i class="fas fa-exclamation-triangle"></i></a>
                        </td>
                      </tr>
                      <?php $i++ ?>

                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                {{$data->links()}}
              </div>
            </div>
          </div>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

  function myFunction() {
    var checkBox = document.getElementById("issue_date1");
    var text = document.getElementById("issue_date");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = '';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction2() {
    var checkBox = document.getElementById("refernce2");
    var text = document.getElementById("refernce");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = '';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction3() {
    var checkBox = document.getElementById("passenger_name2");
    var text = document.getElementById("passenger_name");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction4() {
    var checkBox = document.getElementById("ticket_status2");
    var text = document.getElementById("ticket_status");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction5() {
    var checkBox = document.getElementById("ticket_number2");
    var text = document.getElementById("ticket_number3");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction6() {
    var checkBox = document.getElementById("Dep_city2");
    var text = document.getElementById("Dep_city");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction7() {
    var checkBox = document.getElementById("arr_city2");
    var text = document.getElementById("arr_city");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction8() {
    var checkBox = document.getElementById("dep_date2");
    var text = document.getElementById("dep_date");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction9() {
    var checkBox = document.getElementById("ticket_name2");
    var text = document.getElementById("ticket_name");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction10() {
    var checkBox = document.getElementById("due_to_supp2");
    var text = document.getElementById("due_to_supp");
    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction11() {
    var checkBox = document.getElementById("provider_cost2");
    var text = document.getElementById("provider_cost");
    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction12() {
    var checkBox = document.getElementById("cur_id2");
    var text = document.getElementById("cur_id");
    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }

  function myFunction13() {
    var checkBox = document.getElementById("due_to_customer2");
    var text = document.getElementById("due_to_customer");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  } function myFunction14() {
    var checkBox = document.getElementById("cost2");
    var text = document.getElementById("cost");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  } function myFunction15() {
    var checkBox = document.getElementById("passnger_currency2");
    var text = document.getElementById("passnger_currency");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction26() {
    var checkBox = document.getElementById("Dep_city22");
    var text = document.getElementById("Dep_city23");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction27() {
    var checkBox = document.getElementById("arr_city22");
    var text = document.getElementById("arr_city23");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  function myFunction28() {
    var checkBox = document.getElementById("dep_date22");
    var text = document.getElementById("dep_date23");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }

  function myFunction22() {
    var checkBox = document.getElementById("bursher_time1");
    var text = document.getElementById("bursher_time3");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = ' ';
    } else {
      text.style.display = "none";
      text.value = 'null';
    }
  }
  $(document).ready(function () {


    //ticket
    $(".add").click(function () {
      var id = $(this).closest("tr").find('.id').val();
      var emp_id = $(this).closest("tr").find('.emp_id').val();
      var service_id = $(this).closest("tr").find('.service_id').val();
      var remark_id = $(this).closest("tr").find('.remark_id').val();
      var ticket_number = $(this).closest("tr").find('.ticket_number').val();
      var issue_val = $(this).closest("tr").find('.issue_val2').val();
      var refernce_val2 = $(this).closest("tr").find('.refernce_val2').val();
      var passenger_name_val2 = $(this).closest("tr").find('.passenger_name_val2').val();
      var ticket_status_val2 = $(this).closest("tr").find('.ticket_status_val2').val();
      var Dep_city_val2 = $(this).closest("tr").find('.Dep_city_val2').val();
      var Dep_city_val22 = $(this).closest("tr").find('.Dep_city_val22').val();
      var ticket_number_val2 = $(this).closest("tr").find('.ticket_number_val2').val();
      var arr_city_val2 = $(this).closest("tr").find('.arr_city_val2').val();
      var arr_city_val22 = $(this).closest("tr").find('.arr_city_val22').val();
      var dep_date_val2 = $(this).closest("tr").find('.dep_date_val2').val();
      var dep_date_val22 = $(this).closest("tr").find('.dep_date_val22').val();
      var bursher_time = $(this).closest("tr").find('.bursher_time').val();
      var ticket_name_val2 = $(this).closest("tr").find('.ticket_name_val2').val();
      var supplier_name_val2 = $(this).closest("tr").find('.supplier_name_val2').val();
      var provider_cost_val2 = $(this).closest("tr").find('.provider_cost_val2').val();
      var cur_name_val2 = $(this).closest("tr").find('.cur_name_val2').val();
      var cost_val2 = $(this).closest("tr").find('.cost_val2').val();
      var employee_val2 = $(this).closest("tr").find('.employee_val2').val();
      var passnger_currency_val2 = $(this).closest("tr").find('.passnger_currency_val2').val();
      console.log('issue_val');
      console.log(issue_val);
      $('#tecket_id').val(id);
      $('#ticket_emp_id').val(emp_id);
      $('#ticket_service_id').val(service_id);
      $('#ticket_remark_id').val(remark_id);
      $('#ticket_number').val(ticket_number);
      $('#ticket_number10').val(ticket_number);
      $('#issue_val').val(issue_val);
      $('#passnger_name_val').val(passenger_name_val2);
      $('#refernce_val').val(refernce_val2);
      $('#ticket_status_val').val(ticket_status_val2);
      $('#Dep_city_val').val(Dep_city_val2);
      $('#Dep_city_val22').val(Dep_city_val22);
      $('#ticket_number_val').val(ticket_number_val2);
      $('#arr_city_val').val(arr_city_val2);
      $('#dep_date_val').val(dep_date_val2);
      $('#bursher_time2').val(bursher_time);
      $('#arr_city_val22').val(arr_city_val22);
      $('#dep_date_val22').val(dep_date_val22);
      $('#ticket_name_val').val(ticket_name_val2);
      $('#supplier_name_val').val(supplier_name_val2);
      $('#provider_cost_val').val(provider_cost_val2);
      $('#cur_name_val').val(cur_name_val2);
      $('#employee2_val2').val(employee_val2);
      $('#cost_val').val(cost_val2);
      $('#passnger_currency_val').val(passnger_currency_val2);
      $('#add2').modal('show');

    });

    $("#save").click(function () {
      console.log('save');
      var tecket_id = $('#tecket_id').val();
      var emp_id = $('#ticket_emp_id').val();
      var remark_id = $('#ticket_remark_id').val();
      var remark_body = $('#remark_body').val();
      var service_id = $('#ticket_service_id').val();
      var issue_date = $('#issue_date').val();
      var refernce = $('#refernce').val();
      var passenger_name = $('#passenger_name').val();
      var ticket_status = $('#ticket_status').val();
      var ticket_number = $('#ticket_number3').val();
      var Dep_city = $('#Dep_city').val();
      var arr_city = $('#arr_city').val();
      var dep_date = $('#dep_date').val();
      var Dep_city2 = $('#Dep_city23').val();
      var arr_city2 = $('#arr_city23').val();
      var dep_date2 = $('#dep_date23').val();
      var bursher_time = $('#bursher_time2').val();
      var ticket_name = $('#ticket_name').val();
      var due_to_supp = $('#due_to_supp').val();
      var provider_cost = $('#provider_cost').val();
      var cur_id = $('#cur_id').val();
      var due_to_customer = $('#due_to_customer').val();
      var cost = $('#cost').val();
      var passnger_currency = $('#passnger_currency').val();
      // console.log('remark_body');
      // console.log(remark_body);
      var remark_body = {
        'issue_date': issue_date,
        'refernce': refernce,
        'passenger_name': passenger_name,
        'ticket_status': ticket_status,
        'airline_id': ticket_number,
        'Dep_city': Dep_city,
        'Dep_city2': Dep_city2,
        'arr_city': arr_city,
        'arr_city2': arr_city2,
        'dep_date': dep_date,
        'dep_date2': dep_date2,
        'bursher_time':bursher_time,
        'ticket_name': ticket_name,
        'due_to_supp': due_to_supp,
        'provider_cost': provider_cost,
        'cur_id': cur_id,
        'due_to_customer': due_to_customer,
        'cost': cost,
        'passnger_currency': passnger_currency

      }
      console.log('mycheck');
      console.log(remark_body);
      var tecket_id = $('#tecket_id').val();
      var emp_id = $('#ticket_emp_id').val();
      var remark_id = $('#ticket_remark_id').val();
      var service_id = $('#ticket_service_id').val();
      var ticket_number10 = $('#ticket_number10').val();
      $.ajax({
        url: "{{url('/displaySalesManager/saved_ticket')}}",
        data: { remark_body: remark_body, tecket_id: tecket_id, emp_id: emp_id, remark_id: remark_id, service_id: service_id, ticket_number10: ticket_number10 },
        success: function (data) {
          console.log('sec');
          $('#add').remove();
          swal("Send Secussful", {
            icon: "success",
          }).then((willDelete) => {
            location.reload();
          });
        },
        error: function () {
          console.log('err');
        }

      });
    });

    $('.sendbtn').click(function (e) {
      e.preventDefault();
      var id = $(this).closest("tr").find('.id').val();
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
              url: '/salesManager/ticket_send/' + id,
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



@endsection