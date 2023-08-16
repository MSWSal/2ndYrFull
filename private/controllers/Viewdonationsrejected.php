<?php
class Viewdonationsrejected extends Controller
{
    function index($id = '')
    {
        $data2=array();
        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();
        $resultsperpage= 15;

        $bp = new Rawblood();
        $data = $bp->findrejected2("status",1,"blood_bank_id",$bbid);

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

        $data2= $bp->paginallrejected2("status",1,"blood_bank_id",$bbid,$thispagefirstres,$resultsperpage);
        

    }
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

    

        
        $this->view('viewdonationsrejected',['rows' => $data2,'ess' => $essentials]);
       
    }

    function index2($id = '')
    {
        $bbid=$_SESSION['USER']->blood_bank_id;

        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text=addslashes($text);
            
           
            $bp = new Rawblood();

            $stm = "select raw_blood_packet.*,blood_donation_camp.camp_name,donor.name from raw_blood_packet INNER JOIN blood_donation_camp ON raw_blood_packet.blood_donation_camp_id=blood_donation_camp.camp_id INNER JOIN donor ON raw_blood_packet.donor_id=donor.id where raw_blood_packet.status>1 AND raw_blood_packet.blood_bank_id=:bbid AND donor.name like '$text%'";

            
            $results=$bp->query($stm,[
                'bbid'=>$bbid,
            ]);
            
            echo json_encode($results);
           
             }

    }
}
?>