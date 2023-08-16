<?php
class Wbcbldreqdetails extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];

        $title="WBC A+";
        $name="wAp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='A+'";

        $data=$wbc->query($q1);
       
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

        $title="WBC A-";
        $name="wAn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='A-'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index3($id = '')
    {
        $id=$_GET['id'];

        $title="WBC B+";
        $name="wBp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='B+'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index4($id = '')
    {
        $id=$_GET['id'];

        $title="WBC B-";
        $name="wBn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='B-'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index5($id = '')
    {
        $id=$_GET['id'];

        $title="WBC AB+";
        $name="wABp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='AB+'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index6($id = '')
    {
        $id=$_GET['id'];

        $title="WBC AB-";
        $name="wABn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='AB-'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index7($id = '')
    {
        $id=$_GET['id'];

        $title="WBC O+";
        $name="wOp";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='O+'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }

    function index8($id = '')
    {        
        $id=$_GET['id'];

        $title="WBC O-";
        $name="wOn";
        $amnt=$_GET['amnt'];
        $bb=$_GET['bb'];
        $temp=0;
        $remain=0;
        $ids=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $wbc=new Wbc();

        $q1="SELECT * FROM wbc 	
        WHERE blood_bank_id=$bbid AND exp_date > CURDATE() AND blood_group='O-'";

        $data=$wbc->query($q1);
        // $data=$data[0];

        // echo "<pre>";
        // print_r($data);

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

        // echo "<pre>";
        // print_r($ids);

        // echo $remain;
        // echo $temp;



        
        $this->view('rbcbldreqdetails',['rows'=>$data,'ids'=>$ids,'remain'=>$remain,'send'=>$temp,'amnt'=>$amnt,'bb'=>$bb,'ttl'=>$title,'name'=>$name,'id'=>$id]);
       
    }
}