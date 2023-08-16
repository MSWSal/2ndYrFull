<?php
class Mainrejects extends Controller
{
    function index($id = '')
    {       
            if(!Auth::logged_in()){
            $this->redirect('adminlogin');
            }

            if($_SESSION['USER']->role!='PHI'){
                $this->redirect('login');

            }
        

            $bbid=$_SESSION['USER']->blood_bank_id;

// ----------------------------------pagination-----------------------
            $data2=array();

            $essentials=array();
            $resultsperpage= 15;
            
            $bdc = new Bdcreq();
            $data = $bdc->bdcwhere("status",2,"blood_bank",$bbid);
            if(isset($_POST['search'])){//=================================if search bar selected
                $text=$_POST['searchval'];
                $q1 = "select * from donation_camp_request where status=2 AND blood_bank=:bbid AND name like '$text%'";
                $data = $bdc->query($q1,[
                    'bbid'=>$bbid,
                ]);

            }

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

            $data2= $bdc->paginbdcwhere("status",2,"blood_bank",$bbid,$thispagefirstres,$resultsperpage);
            if(isset($_POST['search'])){//=================================if search bar selected
                $text=$_POST['searchval'];
                $q1 = "select * from donation_camp_request where status=2 AND blood_bank=:bbid AND name like '$text%' limit $thispagefirstres,$resultsperpage";
                $data2 = $bdc->query($q1,[
                    'bbid'=>$bbid,
                ]);

            }
        }
// ----------------------------------pagination end----------------------
        

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        
         $this->view('mainrejects', ['rows' => $data2,'ess' => $essentials]);
       
    }
}