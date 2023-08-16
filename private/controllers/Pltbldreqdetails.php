<?php
class Pltbldreqdetails extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];

        $title="Platelette A+";
        $name="pltAp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A+'";

        $data=$plt->query($q1,[
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

        $title="Platelette A-";
        $name="pltAn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='A-'";

        $data=$plt->query($q1,[
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

        $title="Platelette B+";
        $name="pltBp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B+'";

        $data=$plt->query($q1,[
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

    function index4($id = '')
    {
        $id=$_GET['id'];

        $title="Platelette B-";
        $name="pltBn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='B-'";

        $data=$plt->query($q1,[
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

        $title="Platelette AB+";
        $name="pltABp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB+'";

        $data=$plt->query($q1,[
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

        $title="Platelette AB-";
        $name="pltABn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='AB-'";

        $data=$plt->query($q1,[
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

    function index7($id = '')
    {
        $id=$_GET['id'];

        $title="Platelette O+";
        $name="pltOp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O+'";

        $data=$plt->query($q1,[
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

        $title="Platelette O-";
        $name="pltOn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $plt=new Platelettes();

        $q1="SELECT * FROM platelets 	
        WHERE blood_bank_id=:bbid AND exp_date > CURDATE() AND blood_group='O-'";

        $data=$plt->query($q1,[
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