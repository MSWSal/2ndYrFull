<?php
class Viewdonations extends Controller
{
    function index($id = '')
    {   
        $bbid=$_SESSION['USER']->blood_bank_id;
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $bp = new Rawblood();
        $q1="SELECT raw_blood_packet.*,donor.name,blood_donation_camp.camp_name FROM raw_blood_packet INNER JOIN donor ON raw_blood_packet.donor_id=donor.id INNER JOIN blood_donation_camp ON raw_blood_packet.blood_donation_camp_id=blood_donation_camp.camp_id WHERE raw_blood_packet.blood_bank_id=:bbid AND status=0";

        if(isset($_POST['search'])){//=================================if search bar selected
            $text=$_POST['searchval'];
            $q1="SELECT raw_blood_packet.*,donor.name,blood_donation_camp.camp_name FROM raw_blood_packet INNER JOIN donor ON raw_blood_packet.donor_id=donor.id INNER JOIN blood_donation_camp ON raw_blood_packet.blood_donation_camp_id=blood_donation_camp.camp_id WHERE raw_blood_packet.blood_bank_id=:bbid AND status=0 AND donor.name like '$text%'";

        }
        $data = $bp->query($q1,[
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
            $q2="SELECT raw_blood_packet.*,donor.name,blood_donation_camp.camp_name FROM raw_blood_packet INNER JOIN donor ON raw_blood_packet.donor_id=donor.id INNER JOIN blood_donation_camp ON raw_blood_packet.blood_donation_camp_id=blood_donation_camp.camp_id WHERE raw_blood_packet.blood_bank_id=:bbid AND status=0 limit $thispagefirstres,$resultsperpage";
            if(isset($_POST['search'])){//=================================if search bar selected
                $text=$_POST['searchval'];
                $q2="SELECT raw_blood_packet.*,donor.name,blood_donation_camp.camp_name FROM raw_blood_packet INNER JOIN donor ON raw_blood_packet.donor_id=donor.id INNER JOIN blood_donation_camp ON raw_blood_packet.blood_donation_camp_id=blood_donation_camp.camp_id WHERE raw_blood_packet.blood_bank_id=:bbid AND status=0 AND donor.name like '$text%' limit $thispagefirstres,$resultsperpage";
    
            }
            $data2 = $bp->query($q2,[
                'bbid'=>$bbid,
            ]);


        }

        


      

    

        
        $this->view('viewdonations',['rows' => $data2,'ess' => $essentials]);
       
    }
}
?>