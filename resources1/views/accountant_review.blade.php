@extends('app_layouts.master')
@section('main_content')

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container p-4">
    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row" >
          <div class="col-12" style="display:none">
            <div class="info-box">
            <div class='row'>
                <div class='col-4'>
                <div class='row'>
              <div class='col-6'>
                <button class="btn btn-primary"></button>
                <button class="btn btn-danger"></button>
                <button class="btn btn-warning"></button>
              </div>
              <div class='col-6'>
                <button class="btn btn-info"></button>
                <button class="btn btn-secondary"></button>
                <button class="btn btn-success"></button>
              </div>
              </div>
                </div>
                <div class='col-4'>
                <div class='row'>
              <div class='col-6'>
                <button class="btn btn-primary"></button>
                <button class="btn btn-danger"></button>
                <button class="btn btn-warning"></button>
              </div>
              <div class='col-6'>
                <button class="btn btn-info"></button>
                <button class="btn btn-secondary"></button>
                <button class="btn btn-success"></button>
              </div>
              </div>
                </div>

            </div>
            
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">yyyy</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>passenger</th>
        <th>issuedBy</th>
        <th>issuedDate</th>
        <th>provider</th>
        <th>cost</th>
        <th>c</th>
        <th>customer</th>
        <th>cost</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
      <tr id="tr{{$item->id}}" >
      <td>{{$item->t_id}}</td>
      <td>{{$item->t_pn}}</td>
      <td>{{$item->u_name}}</td>
      <td>{{$item->t_idate}}</td>
      <td>{{$item->s_name}}</td>
      <td>{{$item->t_pc}}</td>
      <td>{{$item->cur_n}}</td>
      <td>{{$item->u_name}}</td>
      <td>{{$item->cost}}</td>
        <td>
        <div class="btn-group btn-group-sm">
        <a type="button" class="btn btn-danger" onclick="display_data({{$item->t_id}},{{$item->st_id}})" ><i class="fas fa-eye "></i></a>
        <a type="button" class="btn btn-danger" onclick="bill_num({{$item->t_id}}" ><i class="fas fa- ">bill_num</i></a>
</div>
     <!-- The Modal -->
     <div class="modal fade" id="myModal">
  <div class="modal-dialog su_modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <h4 class="modal-title">are you sure ,you want delete row?</h4>

      <a  type="button" class="btn btn-danger" data-dismiss="modal">yes</a>
      </div>
   </div>
  </div>
</div>
        </td>
      </tr>
      
     @endforeach
    </tbody>
  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
            
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</section>
</div>
</div>

<script>
function display_data(id,type){

if(type==1){
$.ajax({
url:'/ticket/'+id,
type:'get',
dataType:'json',
success:function(response){
  alert(id);
  if(response.length==0){
    console.log("not found thing");
  }else{
    console.log(response[0]);
  }
}
});
}
}

</script>
  
  
  
  @endsection


