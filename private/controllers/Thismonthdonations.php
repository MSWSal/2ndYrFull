<?php
class Thismonthdonations extends Controller
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
              
        $data=$bdc->thismonthdonations("blood_bank_id",$bbid,"collected_date",$month,$year);

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

        $data2= $bdc->paginthismonthdonations("blood_bank_id",$bbid,"collected_date",$month,$year,$thispagefirstres,$resultsperpage);


    }



        if(!Auth::logged_in()){
            $this->redirect('login');
        }

  


        
        $this->view('thismonthdonations',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}
?>