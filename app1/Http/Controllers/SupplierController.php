<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Supplier;
use App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show_row()
    { 
        $data['suplier']= Supplier::join('sup_currency','sup_currency.sup_id', '=','suppliers.s_no')
        ->join('currency','currency.cur_id','=','sup_currency.cur_id')
        ->where('suppliers.s_no',$_GET['id'])->get();
        return json_encode($data);
                    }
    public function __construct()
    {
        //$this->middleware(['role:admin ']); 
    }
    public function index()
    {
        //$filter = Supplier::where('is_active',1)->paginate(7);
    }
    

    public function add(){
        $services=Service::where('is_active',1)->get();
        $currencies=DB::select('select * from currency');
        return view('addSupplier',['data1'=>$services,'data2'=>$currencies]);
     //  return view('addSupplier');
    }

    public function display(){
       // $affected = Supplier::where('is_active',1)->paginate(7);
        $affected = Supplier::where('is_deleted',0)->paginate(7);
       // $affected1 = Currency::where('is_active',1)->paginate(7);
        return view('displaySupplier',['data'=>$affected/*, 'data2'=>$affected1*/]);
    }


    public function display_row($id)
    { 
      
        $affected = Supplier::where('s_no',$id)->get();
        $sup_sur=Supplier::join('sup_currency','sup_currency.sup_id','=','suppliers.s_no')
        ->join('currency','currency.cur_id','=','sup_currency.cur_id')->where('suppliers.s_no',$id)->get();
        $services=DB::select('select * from services ');
        $sup_ser=Supplier::join('sup_services','sup_services.sup_id','=','suppliers.s_no')
        ->join('services','services.ser_id','=','sup_services.service_id')->where('suppliers.s_no',$id)->get();
        $currencies=DB::select('select * from currency ');
        return view('editSupplier',['data'=>$affected,'data1'=>$services,'data2'=>$currencies,'sup_cur'=>$sup_sur,'sup_ser'=>$sup_ser]);
    }

    public function hide_row($id){
        $affected1= Supplier::where('s_no',$id)->update(['is_deleted'=>'1']);

        $affected = Supplier::where('is_deleted',1)->paginate(7);
        
        return redirect('displaySupplier')->with('success',$affected);

        }

       public function addToSupCurr(Request $req){
            //$cur=new Sup_Currency;
            $supplier=new Supplier;

            $affected1 = Supplier::select('s_no','supplier_currency')->get();
          if(isset($affected2))
          {
              foreach($affected2 as $aff){
          $cur->sup_id=$req->s_no;
          $cur->cur_id=$req->supplier_currency;
          echo $cur->save();
        }
    }
            return addToSupCurr();

        }

        public function save1(Request $req)
        {

          $supplier=new Supplier;
         
            if($req->hasFile('supplier_photo')){
                 $photo=$req->file('supplier_photo');
                 $photo_name=time().basename($_FILES["supplier_photo"]["name"]);
                 $supplier_photo=$photo->move('img/suppliers/',$photo_name);
                 $supplier->supplier_photo= $photo_name;

             }
          
         
            
             $supplier->s_no=$req->s_no;
          $supplier->supplier_name=$req->supplier_name;
          $supplier->supplier_mobile=$req->supplier_mobile;
          $supplier->supplier_phone=$req->supplier_phone;
          $supplier->supplier_email=$req->supplier_email;
          $supplier->supplier_address=$req->supplier_address;
          $supplier->supplier_acc_no=$req->supplier_acc_no;
          $supplier->supplier_remark=$req->supplier_remark;
          $supplier->is_active=$req->is_active;
          echo $supplier->save();
         $id=DB::table('suppliers')->latest('s_no')->first();
        // echo $id;
        $id2=$id->s_no;
         $cur_id= $req->input('supplier_currency');
         $cur;
         print_r($cur_id);
         $num=count($cur_id);
         for($i=0;$i<$num;$i++){
            $cur=$cur_id[$i];
            $sup_cur=DB::insert('insert into sup_currency (sup_id,cur_id) value ("'.$id2.'","'.$cur.'")');
        }
        $service= $req->input('supplier_service');
        $services;
        $num2=count($service);
        for($i=0;$i<$num2;$i++){
           $services=$service[$i];
           $sup_cur=DB::insert('insert into sup_services (sup_id,service_id) value ("'.$id2.'","'.$services.'")');
       }
          $affected = Supplier::where('is_deleted',0)->paginate(7);
          // $services['services']=Service::where('is_active',1)->get();
          return redirect('displaySupplier')->with('Success','Supplier has been Added successfully');
                   
        }

        

        public function edit_row(Request $req){
            if($req->hasfile('supplier_photo'))
            {
               $attchmentFile =$req->file('supplier_photo') ;
               $num=count($attchmentFile);
              for($i=0;$i<$num;$i++){
                 $ext=$attchmentFile[$i]->getClientOriginalExtension();
               $attchmentName =rand(123456,999999).".".$ext;
               $attchment=$attchmentFile[$i]->move('img/user_attchment/',$attchmentName);
               $img.=$attchmentName.',';
           
               }} 
               else{
                $supplier_phone=$req->supplier_photo1;

               }  
        $affected1= Supplier::where('s_no',$req->s_no)->update(['supplier_name'=>$req->supplier_name,'supplier_mobile'=>$req->supplier_mobile,
        'supplier_phone'=>$req->supplier_phone,'supplier_email'=>$req->supplier_email,'supplier_photo'=>$req->supplier_photo,
        'supplier_address'=>$req->supplier_address, 'supplier_acc_no'=>$req->supplier_acc_no, 'create_date'=>$req->create_date,
        'supplier_remark'=>$req->supplier_remark,
        'is_active'=>$req->is_active,
        ]);

        $id2=$req->s_no;
        $cur_id= $req->input('supplier_currency');
        $cur;
        print_r($cur_id);
        $num=count($cur_id);
        for($i=0;$i<$num;$i++){
           $cur=$cur_id[$i];
           $sup_cur=DB::insert('update  sup_currency set cur_id="'.$cur.'" where sup_id="'.$id2.'"');
       }
       $service= $req->input('supplier_service');
       $services;
       $num2=count($service);
       for($i=0;$i<$num2;$i++){
          $services=$service[$i];
          $sup_cur=DB::insert('update  sup_services set service_id="'.$services.'" where sup_id="'.$id2.'"');
      }
            $affected = Supplier::where('is_deleted',0)->paginate(7);
            
            //return "in edit function ";
            return redirect('displaySupplier')->with('Success','Supplier has been updateded successfully');
            
        }
public function  edit_supplier(){
    

      $supplier=new Supplier;
     
      $affected1= Supplier::where('s_no',$req->s_no)->update(['supplier_name'=>$req->supplier_name,'supplier_mobile'=>$req->supplier_mobile,
      'supplier_phone'=>$req->supplier_phone,'supplier_email'=>$req->supplier_email,'supplier_photo'=>$req->supplier_photo,
      'supplier_address'=>$req->supplier_address, 'supplier_acc_no'=>$req->supplier_acc_no, 'create_date'=>$req->create_date,
      'supplier_remark'=>$req->supplier_remark,
      'is_active'=>$req->is_active,
      ]);
    // echo $id;
    $id2=$id->s_no;
     $cur_id= $req->input('supplier_currency');
     $cur;
     print_r($cur_id);
     $num=count($cur_id);
     for($i=0;$i<$num;$i++){
        $cur=$cur_id[$i];
        $sup_cur=DB::update('update sup_currency  set sup_id="'.$id2.'",cur_id="'.$cur.'")');
    }
    $service= $req->input('supplier_service');
    $services;
    $num2=count($service);
    for($i=0;$i<$num2;$i++){
       $services=$service[$i];
       $sup_cur=DB::update('update  sup_services  set sup_id="'.$id2.'",service_id="'.$services.'")');
   }
      $affected = Supplier::where('is_deleted',0)->paginate(7);
      // $services['services']=Service::where('is_active',1)->get();
      return redirect('displaySupplier')->with('Success','Supplier has been Added successfully');
               
    

}
        public function is_active($id){
            $affected1= Supplier::where('s_no',$id)
            ->update(['is_active'=>'1']);
           
            return redirect('displaySupplier');
            }
            public function is_not_active($id){
                $affected1= Supplier::where('s_no',$id)
                ->update(['is_active'=>'0']);
                $affected = Supplier::where('is_deleted',0)->paginate(7);
                return redirect('displaySupplier');
                }
                public function filter($id){
                    if($id==1){
                        $affected1 = Supplier::where('is_active',1)->get();
                        $affected = Supplier::where([['is_deleted',0],['is_active',1]])->paginate(7);
                        return view('displaySupplier',['data'=>$affected,'data1'=>$affected1]);
                    }elseif($id==0){
                        $affected1 = Supplier::where('is_active',1)->get();
                        $affected = Supplier::where([['is_deleted',0],['is_active',0]])->paginate(7);
                        return view('displaySupplier',['data'=>$affected,'data1'=>$affected1]);
                    }
                }



                //public function serviceFun()




        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $services['services']=Service::where('is_active',1)->get();
       // return view('addSupplier')->with('services', $services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


}
