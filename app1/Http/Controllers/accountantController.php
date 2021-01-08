<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\service;
use App\airline;
use App\Suplier;
use App\Employee;
use App\TicketService;
use App\BusService;
use App\CarService;
use App\ServiceService;
use App\visaService;
use App\HotelService;
use App\MedicalService;
use App\GeneralService;
class accountantController extends Controller
{
    public function accountant_view()
    {  
        //ticket
        $affectedt = DB::select('SELECT COUNT(*) as accountant FROM ticket_services WHERE ticket_status = 3');
        $affectedt1 = DB::select('SELECT COUNT(*) as finish FROM ticket_services WHERE ticket_status = 4');

        //hotel
        $affectedh = DB::select('SELECT COUNT(*) as accountant FROM hotel_services WHERE hotel_status = 3');
        $affectedh1 = DB::select('SELECT COUNT(*) as finish FROM hotel_services WHERE hotel_status = 4');

         //bus
         $affectedb = DB::select('SELECT COUNT(*) as accountant FROM bus_services WHERE service_status = 3');
         $affectedb1 = DB::select('SELECT COUNT(*) as finish FROM bus_services WHERE service_status = 4');
  
         //car
         $affectedc = DB::select('SELECT COUNT(*) as accountant FROM car_services WHERE service_status = 3');
          $affectedc1 = DB::select('SELECT COUNT(*) as finish FROM car_services WHERE service_status = 4');

           //medical
        $affectedm = DB::select('SELECT COUNT(*) as accountant FROM medical_services WHERE service_status = 3');
        $affectedm1 = DB::select('SELECT COUNT(*) as finish FROM medical_services WHERE service_status = 4');

         //general
         $affectedg = DB::select('SELECT COUNT(*) as accountant FROM general_services WHERE service_status = 3');
         $affectedg1 = DB::select('SELECT COUNT(*) as finish FROM general_services WHERE service_status = 4');
 
         //visa
         $affectedv = DB::select('SELECT COUNT(*) as accountant FROM visa_services WHERE visa_status = 3');
         $affectedv1 = DB::select('SELECT COUNT(*) as finish FROM visa_services WHERE visa_status = 4');

         return view('accountant_view',['tic1'=>$affectedt,'tic2'=>$affectedt1,
                                         'bus1'=>$affectedb,'bus2'=>$affectedb1,
                                         'car1'=>$affectedc,'car2'=>$affectedc1,
                                         'hot1'=>$affectedh,'hot2'=>$affectedh1,
                                         'med1'=>$affectedm,'med2'=>$affectedm1,
                                         'gen1'=>$affectedg,'gen2'=>$affectedg1,
                                         'vis1'=>$affectedv,'vis2'=>$affectedv1,
                                         ]);

    }
    public function accountant_review($id)
    { 
        if($id=='ticket'){
 //ticket
 $affected =TicketService::where('service_status',3)
 ->join('currency','ticket_services.cur_id','currency.cur_id')
 ->join('suppliers','ticket_services.due_to_supp','suppliers.s_no')
 ->join('users','ticket_services.user_id','users.id')
 ->select ('ticket_services.id as t_id' ,
 'ticket_services.service_id as st_id' ,
 'ticket_services.passenger_name as t_pn',
 'ticket_services.provider_cost as t_pc' ,
 'suppliers.supplier_name as s_name',
 'users.name as u_name',
 'currency.cur_name as cur_n',
 'ticket_services.cost as cost',
 'ticket_services.Issue_date as t_idate') 
 ->paginate(10);
 $affected1=['id'=>'ticket'];
    }elseif($id=='bus'){
        //bus
        $affected = DB::select('SELECT * FROM bus_services WHERE service_status = 3');
        
           }elseif($id=='car'){
            //bus
            $affected = DB::select('SELECT * FROM car_services WHERE service_status = 3');
            
               }elseif($id=='general'){
                //bus
                $affected = DB::select('SELECT * FROM general_services WHERE service_status = 3');
                $affected1='general';
               }elseif($id=='hotel'){
                //bus
                $affected = DB::select('SELECT * FROM hotel_services WHERE service_status = 3');
                
               }elseif($id=='visa'){
                //bus
                $affected = DB::select('SELECT * FROM visa_services WHERE service_status = 3');
                
               }elseif($id=='medical'){
                //bus
                $affected = DB::select('SELECT * FROM medical_services WHERE service_status = 3');
                
               }
    return view('accountant_review',['data'=>$affected,'data1'=>$affected1]);      

    }
    public function ticket($id){
 //ticket
 $affected =TicketService::where('ticket_services.id',$id)
 ->join('currency','ticket_services.cur_id','currency.cur_id')
 ->join('suppliers','ticket_services.due_to_supp','suppliers.s_no')
 ->join('users','ticket_services.user_id','users.id')
 ->select ('ticket_services.id as t_id' ,
 'ticket_services.passenger_name as t_pn',
 'ticket_services.provider_cost as t_pc' ,
 'suppliers.supplier_name as s_name',
 'users.name as u_name',
 'currency.cur_name as cur_n',
 'ticket_services.cost as cost',
 'ticket_services.Issue_date as t_idate') 
 ->get();
    echo json_encode($affected);
    }
    
}
