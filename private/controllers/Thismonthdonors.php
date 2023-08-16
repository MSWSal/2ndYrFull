<?php
class Thismonthdonors extends Controller
{
    function index($id = '')
    {
        $month=date('m');
        $year=date('Y');
        $bbid=$_SESSION['USER']->blood_bank_id;

        $data2=array();

        $essentials=array();
        $resultsperpage= 15;

        $bdc=new Rawblood(); 

        $q1="select donor.* FROM donor INNER JOIN raw_blood_packet ON donor.id=raw_blood_packet.donor_id WHERE raw_blood_packet.blood_bank_id=:bbid AND MONTH(collected_date)=:month AND YEAR(collected_date)=:year";
              
        $data=$bdc->query($q1,[
            'bbid'=>$bbid,
            'month'=>$month,
            'year'=>$year,
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

        $q2="select donor.* FROM donor INNER JOIN raw_blood_packet ON donor.id=raw_blood_packet.donor_id WHERE raw_blood_packet.blood_bank_id=:bbid AND MONTH(collected_date)=:month AND YEAR(collected_date)=:year limit $thispagefirstres,$resultsperpage";


        $data2= $bdc->query($q2,[
            'bbid'=>$bbid,
            'month'=>$month,
            'year'=>$year,
        ]);
       

    }


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $this->view('thismonthdonors',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}
?>