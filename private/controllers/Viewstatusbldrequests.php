<?php
class Viewstatusbldrequests extends Controller
{
    function index($id = '')
    {

        $data2=array();
        $essentials=array();
        $resultsperpage= 15;
        $bbid=$_SESSION['USER']->blood_bank_id;


        $breq=new BLbldreq();
        $q1="SELECT blood_request.*,blood_bank.name,doctor.name as docname FROM blood_request  
        INNER JOIN blood_bank ON blood_request.blood_bank_id_destination=blood_bank.blood_bank_id
        INNER JOIN doctor ON blood_request.doctor_id=doctor.id
        WHERE blood_bank_id_source=:bbid";

        $data=$breq->query($q1,[
            'bbid'=>$bbid,
        ]);

        if($data!=NULL){
            $numofresults=count($data);
            $numofpages= ceil($numofresults/$resultsperpage);

            $essentials['noofpgs']=$numofpages;

            if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
                $page=1;
            } else{
                $page=$_GET['page'];
            }

            $thispagefirstres=($page-1)*$resultsperpage;

            $q2="SELECT blood_request.*,blood_bank.name,doctor.name as docname FROM blood_request  
        INNER JOIN blood_bank ON blood_request.blood_bank_id_destination=blood_bank.blood_bank_id
        INNER JOIN doctor ON blood_request.doctor_id=doctor.id
        WHERE blood_bank_id_source=:bbid limit $thispagefirstres,$resultsperpage";

            $data2=$breq->query($q2,[
                'bbid'=>$bbid,
            ]);

        }
        // --------------------------------

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

       

        
        $this->view('viewstatusbldrequests',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}