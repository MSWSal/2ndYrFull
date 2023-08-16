<?php
class Rbcbldreqdetails extends Controller
{   
    
    function index($id = '')
    {
        $id=$_GET['id'];
        $title="RBC A+";
        $name="rAp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A+'";

        $data=$rbc->query($q1,[
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
        $title="RBC A-";
        $name="rAn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A-'";

        $data=$rbc->query($q1,[
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
        $title="RBC B+";
        $name="rBp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B+'";

        $data=$rbc->query($q1,[
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
        $title="RBC B-";
        $name="rBn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B-'";

        $data=$rbc->query($q1,[
            'bbid'=>$bbid,
        ]);

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    // echo $row->final_packet_id;
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
        $title="RBC AB+";
        $name="rABp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB+'";

        $data=$rbc->query($q1,[
            'bbid'=>$bbid,
        ]);

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    // echo $row->final_packet_id;
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
        $title="RBC AB-";
        $name="rABn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB-'";

        $data=$rbc->query($q1,[
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
        $title="RBC O+";
        $name="rOp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O+'";

        $data=$rbc->query($q1,[
            'bbid'=>$bbid,
        ]);
 

        if($data!=NULL){
            foreach($data as $row){
                if($temp<$amnt){
                    // echo $row->final_packet_id;
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
        $title="RBC O-";
        $name="rOn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $rbc=new Rbc();

        $q1="SELECT * FROM rbc 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O-'";

        $data=$rbc->query($q1,[
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