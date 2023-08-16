<?php
class Plsmbldreqdetails extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma A+";
        $name="plsmAp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A+'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
        

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

       



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index2($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma A-";
        $name="plsmAn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A-'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
        

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

       



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index3($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma B+";
        $name="plsmBp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B+'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
        

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

       



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index4($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma B-";
        $name="plsmBn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B-'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
        

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

        


        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index5($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma AB+";
        $name="plsmABp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB+'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
       

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

     



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index6($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma AB-";
        $name="plsmABn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB-'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
       
        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

      


        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index7($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma O+";
        $name="plsmOp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O+'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
       

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

      



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index8($id = '')
    {
        $id=$_GET['id'];

        $title="Plasma O-";
        $name="plsmOn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plsm=new Plasma();

        $q1="SELECT * FROM plasma 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O-'";

        $data=$plsm->query($q1,[
            'bbid'=>$bbid,
        ]);
       

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    $ids[]=$row->final_packet_id;
                    $temp+=$row->amount;
                }else{
                    $remain+=$row->amount;
                }
                
            }
        }

 
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }
}