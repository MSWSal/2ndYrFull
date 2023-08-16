<?php
class Viewbldrequests extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;

        $breq=new BLbldreq();

        $q1="SELECT blood_request.*,doctor.name,blood_bank.name AS bbname FROM blood_request 
        INNER JOIN doctor ON blood_request.doctor_id=doctor.id 
        INNER JOIN blood_bank ON blood_request.blood_bank_id_source=blood_bank.blood_bank_id	
        WHERE blood_bank_id_destination=:bbid order by blood_request.date desc";

        

        $data=$breq->query($q1,[
            'bbid'=>$bbid,
        ]);
        
        $this->view('viewbldrequests',['rows'=>$data]);
       
    }
}