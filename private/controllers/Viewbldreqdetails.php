<?php
class Viewbldreqdetails extends Controller
{
    function index($id = '')
    {

        $id=$_GET['id'];
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $breq=new BLbldreq();

        $q1="SELECT * FROM blood_request 	
        WHERE request_id=:id";

        $data=$breq->query($q1,[
            'id'=>$id,
        ]);
        $data=$data[0];

    
        
        $this->view('viewbldreqdetails',['rows'=>$data,'id'=>$id]);
       
    }

    function index2($id = '')
    {

        $id=$_GET['id'];
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $breq=new BLbldreq();

        $q1="SELECT * FROM blood_request 	
        WHERE request_id=:id";

        $data=$breq->query($q1,[
            'id'=>$id
        ]);
        $data=$data[0];

     

        
        $this->view('viewsentreqdetails',['rows'=>$data,'id'=>$id]);
       
    }
    
}