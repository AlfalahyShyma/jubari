<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\airline;
use App\Suplier;
use App\Employee;
use App\TicketService;
use App\BusService;
use App\CarService;
use App\ServiceService;
use App\VisaService;
use App\HotelService;
use App\MedicalService;
use App\GeneralService;
use App\User;
use App\users;
use App\Logs;
use Auth;
use App\Supplier;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        
 if(isset($_GET['id']) && ($_GET['id']==0 || $_GET['id']==1) )
       { 
        $where=['services.is_active'=>$_GET['id']];
        $where +=['services.deleted'=>0];

        $data['service']=Service::join('employees', 'employees.emp_id', '=', 'services.emp_id_how_create')
        ->where($where)->get();
        return json_encode($data);}
    
        else if(isset($_GET['id']) && $_GET['id']==2 )
       { 
       
        //$where=['departments.is_active'=>1];
       
        $data['service']=Service::join('employees', 'employees.emp_id', '=', 'services.emp_id_how_create')
        ->where('employees.is_active',1)->get();
        return json_encode($data);}
    
        
        else{

              $where =['services.deleted'=>0];
           
            $data['service']=Service::join('employees','employees.emp_id', '=', 'services.emp_id_how_create')
            ->where($where)->get();
            return view('services',$data);
        }

    
    
    }

    public function insert(Request $request)
    {
 $active;
     if($request->is_active=1)
     {
          $active=1;
     }
     else
     $active=0;
   

      $ser=new Service;
      $loged_id=  Auth::user()->id ;
      $ser->ser_name=$request->ser_name;
      $ser->discrption=$request->discrption;
      $ser->is_active=$active;
      $ser->emp_id_how_create=$loged_id;
    
      echo $ser->save();
      //return $dept->getall();
     return redirect('/service')->with('seccess','Seccess Data Insert');
    
    }

public function edit_row(Request $req){
    $ser=new Service;
    $active;
    if($req->is_active==1)
    {
         $active=1;
    }
    else
    $active=0;
echo $req->ser_name;
    $ser::where('ser_id',$req->id)
    ->update(['ser_name'=>$req->ser_name,'discrption'=>$req->discrption,
    'is_active'=>$active,
    ]);
    $data['service'] = Service::where('deleted',0)->get();
    return redirect('services')->with($data);
    
}
public function display_row($id)
{ 
    $data['service'] = Service::where('ser_id',$id)->get();
    return view('update_service',$data);
                }

    public function hide_row($id){
        echo $id;
        $affected1= Service::where('ser_id',$id)
        ->update(['deleted'=>1]);
        $data['service'] = Service::where('deleted',0)->get();
      // return response()->json(['status'=>'Delete Successfully']);
      return redirect('/service_test')->with('seccess','Seccess Data Delete');

        }
  
        
          
                       
 public function show_repo()
                { 
                    $LOGED_Id=  Auth::user()->id ;                    //get data of ticket service
                 $data['save_ticket']=TicketService::join('employees','employees.emp_id', '=','ticket_services.due_to_customer')
                ->where(['ticket_services.service_status'=>1,'ticket_services.due_to_customer'=>  $LOGED_Id,'ticket_services.deleted'=>0])->count();;
                $data['sent_ticket']=TicketService::join('employees','employees.emp_id', '=','ticket_services.due_to_customer')
                ->where(['ticket_services.service_status'=>2,'ticket_services.due_to_customer'=>  $LOGED_Id,'ticket_services.deleted'=>0])->count();;
                $data['archev_ticket']=TicketService::join('employees','employees.emp_id', '=','ticket_services.due_to_customer')
                ->where(['ticket_services.service_status'=>4,'ticket_services.due_to_customer'=>  $LOGED_Id,'ticket_services.deleted'=>0])->count();;
                 
                //get data of bus service
                $data['save_bus']=BusService::join('employees','employees.emp_id', '=','bus_services.due_to_customer')
                ->where(['bus_services.service_status'=>1,'bus_services.due_to_customer'=>  $LOGED_Id,'bus_services.deleted'=>0])->count();;
                $data['sent_bus']=BusService::join('employees','employees.emp_id', '=','bus_services.due_to_customer')
                ->where(['bus_services.service_status'=>2,'bus_services.due_to_customer'=>  $LOGED_Id,'bus_services.deleted'=>0])->count();;
                $data['archev_bus']=BusService::join('employees','employees.emp_id', '=','bus_services.due_to_customer')
                ->where(['bus_services.service_status'=>4,'bus_services.due_to_customer'=>  $LOGED_Id,'bus_services.deleted'=>0])->count();;
                 
                 //get data of hotelservice
                 $data['save_hotel']=HotelService::join('employees','employees.emp_id', '=','hotel_services.due_to_customer')
                 ->where(['hotel_services.service_status'=>1,'hotel_services.due_to_customer'=>  $LOGED_Id,'hotel_services.deleted'=>0])->count();;
                 $data['sent_hotel']=HotelService::join('employees','employees.emp_id', '=','hotel_services.due_to_customer')
                 ->where(['hotel_services.service_status'=>2,'hotel_services.due_to_customer'=>  $LOGED_Id,'hotel_services.deleted'=>0])->count();;
                 $data['archev_hotel']=HotelService::join('employees','employees.emp_id', '=','hotel_services.due_to_customer')
                 ->where(['hotel_services.service_status'=>4,'hotel_services.due_to_customer'=>  $LOGED_Id,'hotel_services.deleted'=>0])->count();;
                  
                 //get data of visa service
                 $data['save_visa']=VisaService::join('employees','employees.emp_id', '=','visa_services.due_to_customer')
                 ->where(['visa_services.service_status'=>1,'visa_services.due_to_customer'=>  $LOGED_Id,'visa_services.deleted'=>0])->count();;
                 $data['sent_visa']=VisaService::join('employees','employees.emp_id', '=','visa_services.due_to_customer')
                 ->where(['visa_services.service_status'=>2,'visa_services.due_to_customer'=>  $LOGED_Id,'visa_services.deleted'=>0])->count();;
                 $data['archev_visa']=VisaService::join('employees','employees.emp_id', '=','visa_services.due_to_customer')
                 ->where(['visa_services.service_status'=>4,'visa_services.due_to_customer'=>  $LOGED_Id,'visa_services.deleted'=>0])->count();;
                  
                 //get data of car service
                 $data['save_car']=CarService::join('employees','employees.emp_id', '=','car_services.due_to_customer')
                 ->where(['car_services.service_status'=>1,'car_services.due_to_customer'=>  $LOGED_Id,'car_services.deleted'=>0])->count();;
                 $data['sent_car']=CarService::join('employees','employees.emp_id', '=','car_services.due_to_customer')
                 ->where(['car_services.service_status'=>2,'car_services.due_to_customer'=>  $LOGED_Id,'car_services.deleted'=>0])->count();;
                 $data['archev_car']=CarService::join('employees','employees.emp_id', '=','car_services.due_to_customer')
                 ->where(['car_services.service_status'=>4,'car_services.due_to_customer'=>  $LOGED_Id,'car_services.deleted'=>0])->count();;
                  //get data of medical service
                  $data['save_med']=MedicalService::join('employees','employees.emp_id', '=','medical_services.due_to_customer')
                  ->where(['medical_services.service_status'=>1,'medical_services.due_to_customer'=>  $LOGED_Id,'medical_services.deleted'=>0])->count();;
                  $data['sent_med']=MedicalService::join('employees','employees.emp_id', '=','medical_services.due_to_customer')
                  ->where(['medical_services.service_status'=>2,'medical_services.due_to_customer'=>  $LOGED_Id,'medical_services.deleted'=>0])->count();;
                  $data['archev_med']=MedicalService::join('employees','employees.emp_id', '=','medical_services.due_to_customer')
                  ->where(['medical_services.service_status'=>4,'medical_services.due_to_customer'=>  $LOGED_Id,'medical_services.deleted'=>0])->count();;
                   
                   //get data of serviceservice
                   $data['save_service']=GeneralService::join('employees','employees.emp_id', '=','general_services.due_to_customer')
                   ->where(['general_services.service_status'=>1,'general_services.due_to_customer'=>  $LOGED_Id,'general_services.deleted'=>0])->count();;
                   $data['sent_service']=GeneralService::join('employees','employees.emp_id', '=','general_services.due_to_customer')
                   ->where(['general_services.service_status'=>2,'general_services.due_to_customer'=>  $LOGED_Id,'general_services.deleted'=>0])->count();;
                   $data['archev_service']=GeneralService::join('employees','employees.emp_id', '=','general_services.due_to_customer')
                   ->where(['general_services.service_status'=>4,'general_services.due_to_customer'=>  $LOGED_Id,'general_services.deleted'=>0])->count();;
                    
                    return view('sales-wedgate',$data);
   } 

            
public function show_remark()
{ 
    $loged_id=  Auth::user()->id ;

 $data['log']=Logs::join('employees','employees.emp_id','=','logs.remarker_id')
 ->join('services','services.ser_id','=','logs.service_id')
 ->where(['status'=>1,'editor_id'=>$loged_id])->get();

    return view('show_remark',$data);
                }  

}
