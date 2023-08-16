<?php
class Upbdconly extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bbid=$_SESSION['USER']->blood_bank_id;

        // ----------------------------------pagination-----------------------
        $data2=array();

        $essentials=array();
        $resultsperpage= 15;
        
        $bdc = new BLBdc();
        $q1="SELECT * FROM blood_donation_camp WHERE blood_bank_id=:bbid AND date>=CURDATE()";

        $data = $bdc->query($q1,[
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

        $q2="SELECT * FROM blood_donation_camp WHERE blood_bank_id=:bbid AND date>=CURDATE() limit $thispagefirstres,$resultsperpage";

        $data2= $bdc->query($q2,[
            'bbid'=>$bbid,
        ]);
    }
// ----------------------------------pagination end----------------------

  

    

        
        $this->view('upbdconly',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}
?>